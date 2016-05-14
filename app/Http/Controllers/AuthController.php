<?php

    namespace App\Http\Controllers;

    use Activation;
    use App\City;
    use App\Country;
    use App\Http\Requests;
    use App\Spaceorganization;
    use App\UserInfo;
    use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
    use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
    use CurlHttp;
    use Illuminate\Http\Request;
    use Mail;
    use Redirect;
    use Reminder;
    use Sentinel;
    use Storage;
    use Validator;

    class AuthController extends Controller
    {

        /**
         * Show login page
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public
        function login()
        {
            return view('auth.login');
        }

        /**
         * Show Register page
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public
        function register()
        {
            $countrys      = Country::get();
            $cityes        = City::get();
            $organizations = Spaceorganization::get();

            return view('auth.register', ['countrys' => $countrys, 'cityes' => $cityes, 'organizations' => $organizations]);
        }


        /**
         * Show wait page
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public
        function wait()
        {
            return view('auth.wait');
        }


        /**
         * Process login users
         *
         * @param Request $request
         *
         * @return $this|\Illuminate\Http\RedirectResponse
         */
        public
        function loginProcess(Request $request)
        {
            try {
                $this->validate($request, [
                    'email'    => 'required|email',
                    'password' => 'required',
                ]);
                $remember = (bool)$request->remember;
                if (Sentinel::authenticate($request->all(), $remember)) {
                    return Redirect::intended('/home');
                }
                return Redirect::back()
                    ->withInput()
                    ->withErrors(trans('master.error.login'));
            }
            catch (NotActivatedException $e) {
                $sentuser   = $e->getUser();
                $activation = Activation::create($sentuser);
                $code       = $activation->code;
                $sent       = Mail::send('mail.account_activate', compact('sentuser', 'code'), function ($m) use ($sentuser) {
                    $m->from('mail@space-conf.ikd.kiev.ua', 'LaravelSite');
                    $m->to($sentuser->email)->subject('Активация аккаунта');
                });

                if ($sent === 0) {
                    return Redirect::to('login')
                        ->withErrors(trans('master.error.send_mail'));
                }

                return view('auth.login')->withErrors(trans('master.error.send_again'));
            }
            catch (ThrottlingException $e) {
                $delay  = $e->getDelay();
                $errors = trans('master.error.delay') . $delay . trans('master.error.sec');
            }

            return Redirect::back()
                ->withInput()
                ->withErrors($errors);
        }


        /**
         * Process register user from site
         *
         * @param Request $request
         *
         * @return $this
         */
        public
        function registerProcess(Request $request)
        {
            $this->validate($request, [
                'first_name'       => 'required',
                'last_name'        => 'required',
                'gender'           => 'required',
                'organization'     => 'integer',
                'country'          => 'integer',
                'city'             => 'integer',
                'phone'            => 'required',
                'email'            => 'required|email',
                'password'         => 'required',
                'password_confirm' => 'required|same:password',
            ]);
            $input       = $request->all();
            $credentials = ['email' => $request->email];
            if ($user = Sentinel::findByCredentials($credentials)) {
                return Redirect::to('register')
                    ->withErrors(trans('master.error.mail_in'));
            }

            if ($sentuser = Sentinel::register($input)) {
                $activation = Activation::create($sentuser);
                $code       = $activation->code;
//                $sent       = Mail::send('mail.account_activate', compact('sentuser', 'code'), function ($m) use ($sentuser) {
//                    $m->from('mail@space-conf.ikd.kiev.ua', 'Space Conf');
//                    $m->to($sentuser->email)->subject('Активация аккаунта');
//                });
//                if ($sent === 0) {
//                    return Redirect::to('register')
//                        ->withErrors('Ошибка отправки письма активации.');
//                }



                $role = Sentinel::findRoleBySlug('user');
                $role->users()->attach($sentuser);

                $info                  = new UserInfo();
                $info->user_id         = $sentuser->id;
                $info->middle_name     = $request->middle;
                $info->birth           = $request->birth;
                $info->organization_id = $request->organization;
                $info->country_id      = $request->country;
                $info->city_id         = $request->city;
                $info->phone           = $request->phone;
                $info->gender          = $request->gender;
                $info->save();

                $activeuser = Sentinel::findById($sentuser->id);

                if (!Activation::complete($activeuser, $code)) {
                    return Redirect::to("login")
                        ->withErrors(trans('master.error.active_false'));
                }

                return Redirect::to('login')
                    ->withSuccess(trans('master.error.active_true'));

//                return Redirect::to('login')
//                    ->withSuccess('Ваш аккаунт создан. Проверьте Email для активации.')
//                    ->with('userId', $sentuser->getUserId());
            }

            return Redirect::to('register')
                ->withInput()
                ->withErrors(trans('master.error.reg_fail'));
        }


        /**
         *  Activate user account by user id and activation code
         *
         * @param $id
         * @param $code
         *
         * @return $this
         */
        public
        function activate($id, $code)
        {
            $sentuser = Sentinel::findById($id);

            if (!Activation::complete($sentuser, $code)) {
                return Redirect::to("login")
                    ->withErrors(trans('master.error.active_false'));
            }

            return Redirect::to('login')
                ->withSuccess(trans('master.error.active_true'));
        }


        /**
         * Show form for begin process reset password
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public
        function resetOrder()
        {
            return view('auth.reset_order');
        }


        /**
         * Begin process reset password by email
         *
         * @param Request $request
         *
         * @return $this|\Illuminate\Http\RedirectResponse
         */
        public
        function resetOrderProcess(Request $request)
        {
            $this->validate($request, [
                'email' => 'required|email',
            ]);
            $email    = $request->email;
            $sentuser = Sentinel::findByCredentials(compact('email'));
            if (!$sentuser) {
                return Redirect::back()
                    ->withInput()
                    ->withErrors(trans('master.error.login_mail'));
            }
            $reminder = Reminder::exists($sentuser) ?: Reminder::create($sentuser);
            $code     = $reminder->code;

            $sent = Mail::send('mail.account_reminder', compact('sentuser', 'code'), function ($m) use ($sentuser) {
                $m->from('mail@space-conf.ikd.kiev.ua', 'Password');
                $m->to($sentuser->email)->subject(trans('master.error.pass'));
            });
            if ($sent === 0) {
                return Redirect::to('reset')
                    ->withErrors(trans('master.error.pass_mail'));
            }

            return Redirect::to('wait');
        }

        /**
         * Show form for complete reset password
         *
         * @param $id
         * @param $code
         *
         * @return mixed
         */
        public
        function resetComplete($id, $code)
        {
            $user = Sentinel::findById($id);

            return view('auth.reset_complete');
        }


        /**
         * Complete reset password
         *
         * @param Request $request
         * @param         $id
         * @param         $code
         *
         * @return $this
         */
        public
        function resetCompleteProcess(Request $request, $id, $code)
        {
            $this->validate($request, [
                'password'         => 'required',
                'password_confirm' => 'required|same:password',
            ]);
            $user = Sentinel::findById($id);
            if (!$user) {
                return Redirect::back()
                    ->withInput()
                    ->withErrors(trans('master.error.reset_user'));
            }
            if (!Reminder::complete($user, $code, $request->password)) {
                return Redirect::to('login')
                    ->withErrors(trans('master.error.reset_code'));
            }

            return Redirect::to('login')
                ->withSuccess(trans('master.error.pass_ok'));
        }

        /**
         * @return mixed
         */
        public
        function logoutuser()
        {
            Sentinel::logout();

            return Redirect::intended('/');
        }

    }

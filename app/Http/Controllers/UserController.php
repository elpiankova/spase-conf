<?php
    /**
     * Created by PhpStorm.
     * User: mammut
     * Date: 27.04.16
     * Time: 12:24
     */
    namespace App\Http\Controllers;


    use App\City;
    use App\Conferauthor;
    use App\Conferequest;
    use App\Country;
    use App\Http\Requests;
    use App\Spaceorganization;
    use App\User;
    use App\UserInfo;
    use App\Сategory;
    use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;

    class UserController extends Controller
    {
        public
        function home()
        {
            $user         = Sentinel::check();
            $user         = User::where('id', '=', $user->id)->first();
            $country      = Country::where('id', '=', $user->info->country_id)->first();
            $city         = City::where('id', '=', $user->info->city_id)->first();
            $organization = Spaceorganization::where('id', '=', $user->info->organization_id)->first();
            $conf         = 1;
            $count_conf   = Conferequest::where('user_id', '=', $user->id)->count();
            if ($count_conf >= 2
                || Conferequest::where('user_id', '=', $user->id)->where('status', '=', '1')->count()
            ) {
                $conf = null;
            }

            return view('user.home', [
                'user'         => $user,
                'country'      => $country,
                'city'         => $city,
                'organization' => $organization,
                'conf'         => $conf,
                'count_conf'   => $count_conf,
            ]);
        }

        public
        function edit()
        {
            $user          = Sentinel::check();
            $user          = User::where('id', '=', $user->id)->first();
            $countrys      = Country::get();
            $cityes        = City::get();
            $organizations = Spaceorganization::get();

            return view('user.edit', ['user' => $user, 'countrys' => $countrys, 'cityes' => $cityes, 'organizations' => $organizations]);

        }

        public
        function conf()
        {
            $user = Sentinel::check();
            if (Conferequest::where('user_id', '=', $user->id)->count() >= 2
                || Conferequest::where('user_id', '=', $user->id)->where('status', '=', '1')->count()
            ) {
                return redirect('home');
            }
            $user          = Sentinel::check();
            $user          = User::where('id', '=', $user->id)->first();
            $categoryes    = Сategory::get();
            $organizations = Spaceorganization::get();

            return view('user.conf', ['categoryes' => $categoryes, 'user' => $user, 'organizations' => $organizations]);
        }

        public
        function editProcess(Request $request)
        {
            $this->validate($request, [
                'first_name'   => 'required',
                'last_name'    => 'required',
                'organization' => 'integer',
                'country'      => 'integer',
                'city'         => 'integer',
                'phone'        => 'required',
            ]);

            $user = Sentinel::check();
            if ($request->file('photo') != null) {

                if ($request->file('photo')
                        ->isValid()
                    && in_array($request->file('photo')
                        ->getMimeType(), [
                        'image/jpeg',
                        'image/jpg',
                        'image/png',
                        'image/bmp',
                        'image/gif',
                    ])
                ) {

                    $name        = "photo$user->id." . explode("/", $request->file('photo')
                            ->getMimeType())[1];
                    $photoNameDB = "/photo/$name";
                    $edit        = UserInfo::where('user_id', '=', $user->id)->first();
                    $edit->photo = $photoNameDB;
                    $edit->save();
                    $request->file('photo')
                        ->move("photo/", $name);

                }
            }

            $edit             = User::where('id', '=', $user->id)->first();
            $edit->first_name = $request->first_name;
            $edit->last_name  = $request->last_name;
            $edit->save();


            $edit                  = UserInfo::where('user_id', '=', $user->id)->first();
            $edit->middle_name     = $request->middle;
            $edit->birth           = $request->birth;
            $edit->organization_id = $request->organization;
            $edit->country_id      = $request->country;
            $edit->city_id         = $request->city;
            $edit->phone           = $request->phone;
            $edit->save();


            return Redirect::to('home/edit')
                ->withSuccess('Зміни збережено');

        }

        public
        function confProcess(Request $request)
        {
            $this->validate($request, [
                'title'      => 'required',
                'text'       => 'required',
                'name'       => 'required',
                'email'      => 'required',
                'org_ig'     => 'required',
                'section_id' => 'integer',
            ]);
            $request->title = strtoupper($request->title);
            
            $user = Sentinel::check();

            $confrequests             = new Conferequest();
            $confrequests->user_id    = $user->id;
            $confrequests->section_id = $request->section_id;
            $confrequests->title      = $request->title;
            $confrequests->text       = $request->text;
            $confrequests->save();

            $org_ig = $request->org_ig;
            $count  = count($org_ig) - 1;
            for ($i = 0; $i <= $count; $i++) {

                $name   = $request->name[$i];
                $email  = $request->email[$i];
                $org_ig = $request->org_ig[$i];

                $conferauthor = new Conferauthor();
//                Взяв user id щоб не зберігати щоб не брати з бд id заявки
                $conferauthor->conferequests_id = $user->id;
                $conferauthor->email            = $email;
                $conferauthor->name             = $name;
                $conferauthor->organization_id  = $org_ig;
                $conferauthor->save();
            }

            return Redirect::to('home')
                ->withSuccess('Зміни збережено');
        }

        public
        function confUserProcess()
        {
            $user = Sentinel::check();

            $confrequests          = new Conferequest();
            $confrequests->user_id = $user->id;
            $confrequests->status  = 1;
            if ($confrequests->save()) {
                return Redirect::to('home')
                    ->withSuccess('Ви зареєструвались як слухач');
            }
        }
    }

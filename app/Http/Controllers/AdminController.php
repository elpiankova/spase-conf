<?php

    namespace App\Http\Controllers;

    use AdminSection;
    use App\Conferauthor;
    use App\Conferequest;
    use App\Http\Requests;
    use App\User;
    use App\UserInfo;
    use Illuminate\Support\Facades\Log;
    use SleepingOwl\Admin\Http\Controllers\AdminController as SleepingOwl;

    class AdminController extends SleepingOwl
    {
        public
        function index()
        {
            $content = 'ok';

            return $this->renderContent(view('auth.login'));
        }

        public
        function request()
        {
            $content = 'ok';

            return $this->renderContent($content);
        }

        public
        function migrate()
        {
            $users = User::get();
            foreach ($users as $user) {
                $user_info = UserInfo::where('user_id', '=', $user->id)->first();
//                dd($user_info);
                $user->middle_name     = $user_info->middle_name;
                $user->birth           = $user_info->birth;
                $user->organization_id = $user_info->organization_id;
                $user->country_id      = $user_info->country_id;
                $user->city_id         = $user_info->city_id;
                $user->phone           = $user_info->phone;
                $user->photo           = $user_info->photo;
                $user->gender          = $user_info->gender;
                $user->save();
                $log = $user->middle_name . $user->first_name . $user->last_name . ' з email :' . $user->email . ' перенесено';
                Log::info($user->id, ['context' => $log]);

            }
        }

        public
        function author()
        {
            $autors = Conferauthor::get();
            foreach ($autors as $autor) {
                $reqests = Conferequest::where('user_id', $autor->conferequests_id)->get();
                foreach ($reqests as $reqest) {
                    $autor->conferequests_id = $reqest->id;
                    $autor->save();
                }
            }

            return redirect('home');
        }

        public
        function section()
        {
            $sections = Conferequest::where('status', 0)->get();
            foreach ($sections as $section) {
                $section->section_id = $section->section_id + 1;
                $section->save();
            }
            return redirect('home');
        }
    }

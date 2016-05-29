<?php

    namespace App\Http\Controllers;

    use AdminSection;
    use App\Http\Requests;
    use App\User;
    use App\UserInfo;
    use Illuminate\Support\Facades\Log;

    class AdminController extends Controller
    {
        public
        function index()
        {
            $content = 'ok';
            return view('auth.login');
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
    }

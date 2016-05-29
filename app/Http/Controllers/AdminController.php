<?php

    namespace App\Http\Controllers;

    use AdminSection;
    use App\User;
    use App\Http\Requests;

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
            $user = User::get();
            dd($user);
        }
    }

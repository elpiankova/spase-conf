<?php

    namespace App\Http\Controllers;

    use App\Http\Requests;
    use AdminSection;

    class AdminController extends Controller
    {
        public
        function index()
        {
            $content = 'ok';
            return view('auth.login');
        }
    }

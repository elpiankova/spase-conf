<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 20.01.16
 * Time: 17:57
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{

    public function index()
    {
        return view('public.index', [ 'page'=>'index' ]);
    }

    public function archive()
    {
        return view('public.archive', [ 'page'=>'archive' ]);
    }

    public function contact()
    {
        return view('public.contact', [ 'page'=>'contact' ]);
    }

    public function confInfo()
    {
        return view('public.conference.info', [ 'page'=>'conference_info' ]);
    }

    public function confThesis()
    {
        return view('public.conference.thesis', [ 'page'=>'conference_thesis' ]);
    }

    public function confPlace()
    {
        return view('public.conference.place', [ 'page'=>'conference_place' ]);
    }

    public function confCommittee()
    {
        return view('public.conference.committee', [ 'page'=>'conference_committee' ]);
    }
}
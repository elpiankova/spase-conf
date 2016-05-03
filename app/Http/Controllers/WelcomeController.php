<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 20.01.16
 * Time: 17:57
 */

namespace App\Http\Controllers;


use App\Archive;
use App\Confabstract;
use App\Confdescription;
use App\Confinfo;
use App\Index;
use App\Сategory;
use Illuminate\Support\Facades\App;

class WelcomeController extends Controller
{

    public function index()
    {
        $text=Index::find('1');
        $categoryes=Сategory::orderBy('place')->get();

        return view('public.index', [ 'page'=>'index', 'text'=>$text, 'categoryes'=>$categoryes ]);
    }

    public function archive()
    {
        $archives=Archive::get();

        return view('public.archive', ['archives'=>$archives]);
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function confInfo()
    {
        $infos=Confinfo::orderBy('place')->get();

        return view('public.conference.info', ['infos'=>$infos ]);
    }

    public function confThesis()
    {
        $thesis = Confabstract::find('1');
        return view('public.conference.thesis', ['thesis'=>$thesis ]);
    }

    public function confPlace()
    {
        $places = Confdescription::get();
        return view('public.conference.place', ['places'=>$places ]);
    }

    public function confCommittee()
    {
        return view('public.conference.committee');
    }
}
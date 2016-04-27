<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 27.04.16
 * Time: 12:24
 */
namespace App\Http\Controllers;


use App\Archive;
use App\Confabstract;
use App\Confdescription;
use App\Confinfo;
use App\Index;
use App\User;
use App\UserInfo;
use App\Сategory;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function edit()
    {
        $user = Sentinel::check();
        $user = User::where('id', '=', $user->id)->first();
        return view('user.edit', ['user' => $user]);

    }

    public function editProcess(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'organization' => 'integer',
            'country' => 'integer',
            'city' => 'integer',
            'phone' => 'required',
        ]);
//        $input = $request->all();
        $user = Sentinel::check();

        $edit = User::where('id', '=', $user->id)->first();
        $edit->first_name = $request->first_name;
        $edit->last_name = $request->last_name;
        $edit->save();

        $edit = UserInfo::where('user_id', '=', $user->id)->first();
        $edit->middle_name = $request->middle;
        $edit->birth = $request->birth;
        $edit->organization_id = $request->organization;
        $edit->country_id = $request->country;
        $edit->city_id = $request->city;
        $edit->phone = $request->phone;
        $edit->save();

        return Redirect::to('home/edit')
            ->withSuccess('Зміни збережено');

    }
}

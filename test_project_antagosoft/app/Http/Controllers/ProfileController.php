<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function submit(ProfileRequest $req) {
        $profile = new Profile();
        $profile->name = $req->input('user_name');
        $profile->city = $req->input('user_city');
        $profile->area = $req->input('user_area');
        $profile->street = $req->input('user_street');
        $profile->house = $req->input('user_house');
        $profile->additional_info = $req->input('user_additional_info');

        $profile->save();

        return redirect()->route('home');
    }

    public function allAddresses() {
        return view ('profile', ['data' => Profile::orderBy('name')->get()]);
    }

}

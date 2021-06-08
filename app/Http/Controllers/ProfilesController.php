<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller {

    public function index($user_id) {
        $users = User::all();
        $user = $users->find($user_id);
        dd($user);

        //return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($name) {
        $user = User::where('name', '=', $name)->first();

        if($user) {
            return view('profile.profile', $user);
        } else {
            return view('profile.profile', ['message' => 'Could not find the user with username ' . $user]);
        }
    }
}

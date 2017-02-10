<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Invisnik\LaravelSteamAuth\SteamAuth;
use App\Http\Controllers\Controller;
use App\User;
use Auth;


class SteamAuthController extends Controller
{
    private $steam;

    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    public function login()
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();
            if (!is_null($info)) {
                $user = Auth::user();
                $user->steamid = $info->steamID64;
                $user->save();

                return redirect('/'); // redirect to site
            }
        }
        return $this->steam->redirect(); // redirect to Steam login page
    }
}

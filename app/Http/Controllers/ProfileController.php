<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Api\SteamApiController as Steam;

class ProfileController extends Controller
{
    protected $steam;

    public function __construct(Steam $steam)
    {
        $this->steam = $steam;
    }

    public function index($name) {
        $user = User::where('name', '=', $name)->first();

        // Checks so the user exists
        if(!$user) {
            return view('errors.no-profile');
        }

        $csgo_info = $this->steam->getGameInfo('730', $user->steamid);

        $data = array(
            'user' => $user,
            'csgo_info' => $csgo_info
        );

        return view('profile.profile', $data);
    }
}

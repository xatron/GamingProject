<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use App\Http\Controllers\Api\SteamApiController as Steam;


class ConnectionsController extends Controller
{
    protected $steam;

    public function __construct(Steam $steamApiController)
    {
        $this->steam = $steamApiController;
    }

    public function index() {
        $user = Auth::user()->steamid;

        return view('admin.connections', ['steam_profile' => $this->steam->getProfileInfo($user)]);
    }
}

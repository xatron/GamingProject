<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SteamApiController extends Controller
{
    protected $apikey;

    public function __construct()
    {
        $this->apikey = '11BD53EA7DC172752F839A040A7219CE';
    }

    public function getProfileInfo($steamID)
    {
        if($steamID == 0 || $steamID == NULL) {
            return;
        }
        $data = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='. $this->apikey .'&steamids=' . $steamID);
        $json = \GuzzleHttp\json_decode($data, true);

        $result = $json['response']['players'];
        return $result[0];
    }
}

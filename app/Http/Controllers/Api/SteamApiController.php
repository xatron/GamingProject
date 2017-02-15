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

    /**
     * Returns profile information.
     *
     * @param $steamID
     */
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

    public function getGameInfo($appID = NULL, $steamID)
    {
        if($steamID == 0 || $steamID == NULL || $appID == NULL) {
            return false;
        }

        $data = file_get_contents('http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid='. $appID .'&key='. $this->apikey .'&steamid=' . $steamID);
        $json = \GuzzleHttp\json_decode($data, true);

        return $json;
    }
}

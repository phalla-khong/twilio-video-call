<?php

namespace App\Http\Controllers;

use Twilio\Jwt\AccessToken;
use Illuminate\Http\Request;
use Twilio\Jwt\Grants\VideoGrant;
use App\Http\Controllers\Controller;

class SpaController extends Controller
{
    public function index()
    {
        $room_name = 'consult-room';
        $user_identity = 'sok-'.time();
        $token = $this->_twilio_access_token($room_name, $user_identity);
        return view("spa", compact('token', 'room_name'));
    }

    private function _twilio_access_token($room_name, $identity){
        // Substitute your Twilio AccountSid and ApiKey details
        $accountSid = 'AC6f359f045ee14921fa214362264ed0d0'; /* production account */
        $apiKeySid = 'SK55b4b78461e19294ceb4e79013d8d5ca';
        $apiKeySecret = 'CL7P3LvSEi5k7WGz5vve43ePsopyY2Bu';

        // $identity = 'doctor';

        // Create an Access Token
        $token = new AccessToken(
            $accountSid,
            $apiKeySid,
            $apiKeySecret,
            3600, /*Live time. Default is 3600 seconds (1 hour)*/
            $identity
        );

        // Grant access to Video
        $grant = new VideoGrant();
        $grant->setRoom($room_name);
        $token->addGrant($grant);

        // Serialize the token as a JWT
        return $token->toJWT();
    }
}

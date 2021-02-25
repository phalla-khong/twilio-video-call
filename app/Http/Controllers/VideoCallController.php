<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class VideoCallController extends Controller
{
    public function index(){
        $token = $this->_twilio_access_token();
        return view("video_call.index", compact('token'));
    }

    private function _twilio_access_token(){
        // Substitute your Twilio AccountSid and ApiKey details
        $accountSid = 'AC8f4022cb8e02bc058c5fe16055fec6d9';
        $apiKeySid = 'SK7552c707594d8c514e99d45083298780';
        $apiKeySecret = 'KydK5D8xiKXAtIoaY0K8LrVPhS6b3nR6';

        $identity = 'doctor';

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
        $grant->setRoom('cool room');
        $token->addGrant($grant);

        // Serialize the token as a JWT
        return $token->toJWT();
    }
}

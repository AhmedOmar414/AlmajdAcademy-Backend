<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Twilio\Rest\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendTestMessage()
    {
        $twilioAccountSid = env('TWILIO_ACCOUNT_SID');
        $twilioAuthToken = env('TWILIO_AUTH_TOKEN');
        $twilioWhatsAppNumber = env('TWILIO_WHATSAPP_NUMBER');
        $twilioClient = new Client($twilioAccountSid, $twilioAuthToken);

        $message = $twilioClient->messages->create(
            'whatsapp:' . '+201207220414', // Replace with your phone number
            array(
                'from' => 'whatsapp:' . $twilioWhatsAppNumber,
                'body' => 'please click this link https://www.google.com'
            )
        );

        return 'Message Sent!';
    }
}

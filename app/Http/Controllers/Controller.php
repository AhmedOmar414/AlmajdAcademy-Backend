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

    public function whatsappTest(){
        $phone='+1 555 009 3542';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v16.0/102241652856967/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "messaging_product": "whatsapp",
            "to": "201207220414",
            "type": "template",
            "template": {
                "name": "hello_world",
                "language": {
                    "code": "en_US"
                }
            }
        }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer EAATaprdBJHEBAFRcy6irvSYZASNCEzpEnJwA8nZANFGjZAipwmbnoBup7ydnHhD1RDU1XB39n8MiZBz9p7rXwU0GKeO2OaVXXZCFD5vmN9jz1y5Wkd38CZB3J3ZAuCSVqGKlCvM9heLo9ZCzx24xwYn0ahAuvoZCgL6EFJzU7JpfQrDS3nOBlHwEJ5YOdgi8nV64USRdqOhao0tS8MPAVtn7q',
                'Content-Type: application/json'
            ),
        ));

        curl_exec($curl);
        dd(curl_exec($curl));
    }
}

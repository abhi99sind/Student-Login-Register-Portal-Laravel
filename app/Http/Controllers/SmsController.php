<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SmsController extends Controller
{
    //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

    public function getUserNumber(Request $request)
    {
            $mobileNumber = $request->input('mobile');
            $i = 0;
            $pin = "";
            while($i < 4)
            {
            //generate a random number between 0 and 9.
                $pin .= mt_rand(0, 9);
                $i++;
            }
            $message = "Your 4 digit otp is ".$pin;
            $encodeMessage = urlencode($message);
            $authkey = "275458AI58y2bdseE5cd05d17";
            $username = "team@careerlinked.org";


            $senderId = "611332";


$route = "4";

$postData = array(
    'authkey' => $authkey,
    'mobiles' => $mobileNumber,
    'message' => $encodeMessage,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;



            return view('registerSuccess',['otp'=>$pin]);
}
}

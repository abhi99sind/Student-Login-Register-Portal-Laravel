<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VotpController extends Controller
{
    public function index()
    {
        return view('Votp');
    }
    public function send(Request $request)
    {
        return view('Votp');

    }

    public function check(Request $request)
    {
        $email = $request->Input('email');
        $votp = $request->Input('votp');
        $otp = $request->Input('otp');
        if($otp == $votp)
        {
            DB::table('tests')
            ->where("tests.email", "=", $email)
            ->update(['tests.OTP' => $otp]);
            return view('confirm',compact('otp'));

        }
        else{
            echo "Wrong OTP";
        }
    }
}

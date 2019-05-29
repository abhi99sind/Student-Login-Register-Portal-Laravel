<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class PassController extends Controller
{
    public function index(Request $request)
    {
        $otp = $request->Input('otp');
        $pass = $request->Input('password');
        $conpass = $request->Input('confirmPassword');
        if($pass == $conpass)
        {
            $dbpass = Hash::make($pass);
            DB::table('tests')->where("tests.otp", "=", $otp)->update(['tests.pass' => $dbpass]);
            echo "<h1>Password Changed</h1>";
        }
        else{
            echo 'Rewrite Password';
        }
    }
}

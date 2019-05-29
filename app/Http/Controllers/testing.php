<?php

namespace App\Http\Controllers;

use App\test;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Mail\Mailable;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use DB;
use Hash;

class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // test::create(Request::all());
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = Hash::make($name.'@123');
        $data = array("name"=>$name,"email"=>$email,"pass"=>$pass);
        DB::table('tests')->insert($data);
        $this->sendEmail($name,$email,$pass);
        return view('registerSuccess');
    }



    public function sendEmail($name,$email,$pass){
        $objDemo = new \stdClass();
        $objDemo->demo_one = "Your Password is ".$name.'@123';
        $objDemo->sender = $name;

        Mail::to($email)->send(new DemoEmail($objDemo));
    }
    public function sendEmai(Request $request)
    {
        $email = $request->Input('email');

        $i = 0;
        $pin = "";
        while($i < 4)
        {
            //generate a random number between 0 and 9.
            $pin .= mt_rand(0, 9);
            $i++;
        }
        $message = "Your 4 digit otp is ".$pin;

        $objDemo = new \stdClass();
        $objDemo->demo_one = $message;
        $objDemo->sender = 'Abhishek';

        Mail::to($email)->send(new DemoEmail($objDemo));
        echo $pin;
       // return view('Votp');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');
       $password = $request->input('password');

        $data=DB::select('select * from tests where email=?',[$email]);

        if(count($data))
        {
       /* $verify = Hash::make($data['pass']);
            if($password==$verify)
            {*/
                echo '<h1>You have successfully logged in</h1>';
                //return view('loggedIn');
           }
            else
            {
                echo 'Submit the right credentials';
                //return view('create');
          //  }
        }

    }
}

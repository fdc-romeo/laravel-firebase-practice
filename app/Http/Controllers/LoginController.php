<?php

namespace App\Http\Controllers;
use App\Services\FirebaseService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct(){
         $this->database = FirebaseService::connect();
    }
    public function index() {
        return view('/Login/index');
    }
    public function login(Request $request){

        if ($request['email'] == "admin@findnoy.com" && $request['password'] == 'admin123') {
            $params = array(
                'email'=> 'admin@findnoy.com',
                'password'=>'admin123',
                'displayName'=>'Admin'
            );
            session($params);
            return redirect('/home_page');
        } else {
            $error_mess = "Username or Password Incorrect";
            return view('/Login/index',['mess' => $error_mess ]);
        }
    }


}

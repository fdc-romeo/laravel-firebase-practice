<?php

namespace App\Http\Controllers;
use App\Services\FirebaseService;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    //
    public function __construct(){
        $this->database = FirebaseService::connect();
   }
   
    public function index(Request $request) {
        $pas = $request->session()->get('password');
        $email = $request->session()->get('email');
        $displayName = $request->session()->get('displayName');
        
        if (!empty($email) && !empty($pas)) {
            $userInfo = array(
                'password'=> $pas,
                'displayName'=> $displayName,
                'email'=> $email,
            );
            return view('/Dashboard/home',
                ['userInfo' => $userInfo ]
            );
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request){
        session()->flush();
        return redirect('/');
    }
}
 
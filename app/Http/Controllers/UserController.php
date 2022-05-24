<?php

namespace App\Http\Controllers;
use App\Services\FirebaseService;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $database;
    protected $auth;

    public function __construct()
    {

        $this->database = FirebaseService::connect();

    }

    public function index()
    {
        //
        $users  = $this->database->getReference('register')->getValue();
        return view('/User/users_list',['users' => $users ]);
        
    }

    public function create()
    {
        //
        return view('/User/register');
    }


    public function store(Request $request)
    {
        
        $defaultAuth = Firebase::auth();

        $addUser = [
            'email' =>  $request['email'] ,
            'password' =>  $request['password'] ,
        ];

		$createdUser =  $defaultAuth->createUser($addUser);

        //save data user to real time database
        $this->database
            ->getReference('register')
            ->push([
                'email' => $request['email'] ,
                'password' => $request['password'],
                'uid' => $createdUser->uid,
                'authPass' => $createdUser->passwordHash,
          ]);

        return redirect('/list_users');

    }


    public function edit(Request $request)
    {
        //
        $user  = $this->database->getReference('register/'. $request['id'])->getValue();
        return view('/User/edit',
            [
                'user' => $user,
                'id' =>  $request['id'],    
            ]);

            
    }


    public function update(Request $request)
    {
      
        //
        $defaultAuth = Firebase::auth();

        $updateUser = [
            'uid' =>  $request['uid'] ,
            'email'=> $request['email'] ,
            'password' =>  $request['password'],
        ];
        //if user decide to update password 
        $newPass = $request['password'];
        $updateAuth =  $defaultAuth->updateUser($request['uid'],$updateUser);
		$updateAuthPass =  $defaultAuth->changeUserPassword($request['uid'],$newPass);

        $this->database
            ->getReference('register/' . $request['id'])
            ->update([
            'email' => $request['email'] ,
            'password' => $request['password'],
            'uid' => $updateAuth->uid,
            'authPass' => $updateAuthPass->passwordHash,
        ]);

        $hashed = Hash::make($newPass);
        // $signInResult = $defaultAuth->signInWithEmailAndPassword($request['email'], $request['password']);
     
        return redirect('/list_users');
            
    }

    public function destroy(Request $request)
    {
        //
        $defaultAuth = Firebase::auth();
        $defaultAuth->deleteUser($request['uid']);
        $this->database
        ->getReference('register/' . $request['id'])
        ->remove();

        return redirect('/list_users');
    }
}

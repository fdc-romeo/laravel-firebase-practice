<?php

namespace App\Http\Controllers;
use App\Services\FirebaseService;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class TestController extends Controller
{

    
    // protected static $defaultName = 'gs://findnoy-cd3f8.appspot.com';

    // private Storage $storage;
    // private Filesystem $filesystem;
    //
    private $database;
    public function __construct()
    {
     $this->database = FirebaseService::connect();
     // Create a root reference
     
    }

    public function index() 
    {  
        $users  = $this->database->getReference('register')->getValue();
        return view('/Test/list',['users' => !empty($users) ? $users : array() ]);
    }

    
    public function create() 
    {
        return view('/Test/add');
    }
    
    public function add (Request $request)  {
            // $request
        $defaultStoraage =  Firebase::storage();

        
         $img = $request['file_upload'];
         var_dump($img);
         die;
        //  $this->database
        //     ->getReference('register')
        //     ->push([
        //         'name' => $request['name'] ,
        //         'age' => $request['age']
        //  ]);
         return redirect('/list');
    }

    public function update(Request $request) 
    {
        $this->database
          ->getReference('register/' . $request['id'])
          ->update([
            'name' => $request['name'] ,
            'age' => $request['age']
        ]);

        return redirect('/list');
    }

    public function edit(Request $request) {
         $user  = $this->database->getReference('register/'. $request['id'])->getValue();
        return view('/Test/edit',
            [
                'user' => $user,
                'id' =>  $request['id'],
            ]);
    }
    
    public function delete(Request $request)
    { 
        $this->database
        ->getReference('register/' . $request['id'])
        ->remove();
        return redirect('/list');
    }
}

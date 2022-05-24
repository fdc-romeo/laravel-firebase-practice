<?php

namespace App\Http\Controllers;
use App\Services\FirebaseService;
use Illuminate\Http\Request;

class CriminalController extends Controller
{
        //
        public function __construct(){
            $this->database = FirebaseService::connect();
       }

       public function addCriminal(Request $request){
            $this->database
                ->getReference('criminal_list')
                ->push([
                    'name' => $request['name'] ,
                    'age' => $request['age']
                ]);
            return redirect('/Criminal/list_criminals');
       } 

       public function listCriminal(Request $request){  
            $users  = $this->database->getReference('criminal_list')->getValue();
            return view('/Criminal/list_criminals',['users' => !empty($users) ? $users : array() ]);
       }
}

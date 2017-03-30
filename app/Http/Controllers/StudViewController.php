<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class StudViewController extends Controller
{
    public function index(){
      $users = \DB::select('select * from sinhvien');
      return view('stud_view',['users'=>$users]);
      // return  response()->json($users);  
   }
}

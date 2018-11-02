<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class edit extends Controller
{
    
   public function show($id) {
      $users = DB::select('select * from login where id = ?',[$id]);
      return view('edit',['users'=>$users]);
   }
   
   public function edit(Request $request,$id) {
      $name = $request->input('username');
      DB::update('update login set username = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/selectdata">Click Here</a> to go back.';
   }
}

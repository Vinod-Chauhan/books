<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;



class registration extends Controller
{
   function insert(Request $req)
    {
   $username = $req->input('username');
   $email = $req->input('email');
   $password = $req->input('password');
   
   $data = array('username'=>$username,'email'=>$email,'password'=>$password);
           DB::table('login')->insert($data);
           
           //return $this->routeUrl('login')->to('success add data');
           
//return redirect()->route('/login')->with('success add data');
          
          echo "success";
           echo '<a href = "/selectdata">Click Here</a>';
         //  return view('login');
           //return redirect('/login'); 
       
    }
     
   
    //protected $redirectTo = '/login';
}
//return redirect($this->login())->with('message', 'your account created successfully');
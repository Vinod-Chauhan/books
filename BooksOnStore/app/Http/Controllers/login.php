<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class login extends Controller
{
    function login(Request $request){
        $useremail = $req->input('email');
        $pass = $req->input('password');
        
         $users = DB::select('select * from login where email =$useremail, password= $pass');
        
	$arr=mysqli_num_rows($users);
	if($arr==1){
		
	 echo "login success";
           echo '<a href = "/selectdata">Click Here</a>';
	}else{
		echo "<script>alert('email/password wrong');</script>";
	}

         
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\Blog;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    function submit(Request $req)
    {
        
       $name = $req->input('name');
       
       $data = array('name'=>$name);
       DB::table('insertname')->insert($data);
       
       echo "success";
    }
    
      function getdata(){
        
        $data['data'] = DB::table('insertname')->get();
        if(count($data) > 0){
            return view('login',$data);
            
        }
 else {
     return view('login');
     
 }
    
    }
    
    
    
}

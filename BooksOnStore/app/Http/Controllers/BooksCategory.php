<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksCategory extends Controller
{
 
    function insert(Request $req)
    {
        
       $name = $req->input('name');
       $parentid = $req->input('parentid');
       $imageURL = $req->input('imageURL');
       $title = $req->input('title');
       $description = $req->input('description');
       $courseid = $req->input('courseid');
       $custom1 = $req->input('custom1');
       $custom2 = $req->input('custom2');
       $addedBy = $req->input('addedBy');
       
       
       
       
       $data = array('name'=>$name,'parentid'=>$parentid,'imageURL'=>$imageURL,'title'=>$title,
           'description'=>$description,'courseid'=>$courseid,'custom1'=>$custom1,'custom2'=>$custom2,'addedBy'=>$addedBy);
       DB::table('BooksCategoryTable')->insert($data);
       
       echo "success";
    }
   
}

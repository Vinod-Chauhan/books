<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class delete extends Controller
{
   public function destroy($id) {
      DB::delete('delete from login where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/selectdata">Click Here</a> to go back.';
   }
}

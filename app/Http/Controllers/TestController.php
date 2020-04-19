<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function Test(){
        $products = Products::get();
        return view('index',compact('products'));
    }
    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = Products::where('name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    public function Goal(){
        return view('goal');
    }
}

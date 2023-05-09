<?php

namespace App\Http\Controllers;


use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class FrontendController extends Controller
{

     public function index()
     {  
      $slider = slider::where('statuss','0')->get();
        return view('website.index', compact('slider'));


     }
     public function ourProducts()
     {  
        return view('website.ourProdact');


     }
     public function stockholder()
     {  
        return view('website.stockholder');


     }
     public function connect()
     {  
        return view('website.connect');


     }


     public function addComment()
     {  
        return view('website.addComment');


     }
    
   }
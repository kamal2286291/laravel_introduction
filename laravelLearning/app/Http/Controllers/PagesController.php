<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	$first = "Kamal";
    	$last  = "Deepak";
    	$programming = ["PHP","Python","Javascript"];
    	
    	return view('pages.about',compact('first','last','programming'));
    }

    public function contact(){
    	return view('pages.contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	$first = "Kamal";
    	$last  = "Deepak";
    	
    	return view('pages.about',compact('first','last'));
    }
}

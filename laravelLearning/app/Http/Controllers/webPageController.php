<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webPageController extends Controller
{
	

    public function index(){
    	return "Hello World!";
    }
    public function contact(){
    	return view('pages.contact');

    }
    


}

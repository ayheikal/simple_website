<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function showHome(){
    	return view('home');

    }
    public function showContact(){
    	return view('contact');
    }
    public function showAbout(){
    	return view('about');
    	
    }
}

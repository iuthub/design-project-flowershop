<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id){
    	return "it is working and id is ".$id;
    }
    public function create(){
    	return "This is my create method";
    }
    public function show($id){
    	return "This is my show method";
    }

    public function contact(){
    	$people=array('Sardor', 'Aziz', 'Usmon', 'Bekzod', 'Sayidazim');

    	return view('contact', compact('people'));
    }

    public function show_post($id, $name){
    	return view('post', compact('id','name'));
    }
}

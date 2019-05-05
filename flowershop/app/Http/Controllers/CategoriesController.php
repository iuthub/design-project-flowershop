<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;

class CategoriesController extends Controller
{
	/*
	public function __construct()
    {
        $this->middleware('auth');
    }
	*/

    public function create(){
    	$categorys=new Category();
    	$categorys->cat_type_name='New category';

    	$categorys->save();
    	//return redirect()->back();
    }
    public function show(){
    	$categories=Category::all();
    	echo "Categories</br><ul>";
    	foreach($categories as $categorys){
    		echo "<li>".$categorys->cat_type_name."</li>";
    	}
    	echo "</ul>";
    }
    public function delete($id){
    	$category = Category::findOrFail($id);
    	$category->delete();
        
    	//return redirect()->back()->with('info', 'Category deleted!');
    }   
    public function update($id, $category_name){
    	$category = Category::findOrFail($id);
        
    	$category->cat_type_name=$category_name;
    	$category->update();
        
    	//return redirect()->back()->with('info', 'Category deleted!');
    }  

}

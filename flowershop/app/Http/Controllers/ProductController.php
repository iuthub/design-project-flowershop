<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
//use App\;

class ProductController extends Controller
{
	
    public function index(){
    	$products=Product::all();
    	echo "<ul>";
    	foreach($products as $product){
    		echo "<li>".$product->name."</li>";
    	}
    	echo "</ul>";
    }
    public function add(Request $request){
    	$this->validate($request, [
        'company_id' => 'required|min:10|numeric|min:2',
    	'color_id' => 'required|min:10',
    	'period_id' => 'required|min:10',
    	'price_id' => 'required|min:10',
    	'product_amount_id' => 'required|min:10',
    	'feedback_id' => 'required|min:10',
    	'like_id' => 'required|min:10',
    	'rate_id' => 'required|min:10',
    	'picture_id' => 'required|min:10',
        'sub_sub_category_id' => 'required|min:10',
    	'name' => 'required|min:10',
    	'detailed_info' => 'required|min:10'
        ]);
        $product = new Product([
            'company_id' => $request->input('company_id'),
            'color_id' => $request->input('color_id')
            'period_id' => $request->input('period_id')
            'price_id' => $request->input('price_id')
            'product_amount_id' => $request->input('product_amount_id')
            'feedback_id' => $request->input('feedback_id')
            'like_id' => $request->input('like_id')
            'rate_id' => $request->input('rate_id')
            'picture_id' => $request->input('picture_id')
            'sub_sub_category_id' => $request->input('sub_sub_category_id')
            'name' => $request->input('name')
            'detailed_info' => $request->input('detailed_info')
        ]);
        Auth::Product::save($product);
    }
}

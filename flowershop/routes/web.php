<?php

/*use App\Post;
use App\User;
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('admin', function () {
    return view('admin.index');
});
Route::get('/product', 'ProductController@index');
Route::get('category/create',  ['uses' => 'CategoriesController@create',  'as' => 'category.create']);
Route::get('category/update/{id}/{category_name}', ['uses' => 'CategoriesController@update',  'as' => 'category.update']);
Route::get('category/show', ['uses' => 'CategoriesController@show',  'as' => 'category.show']);
Route::get('category/delete/{id}', ['uses' => 'CategoriesController@delete',  'as' => 'category.delete']);
//Route::get('/post/{id}', 'PostController@index');


/*Route::resource('posts', 'PostController');
Route::get('/contact', 'PostController@contact');


Route::get('/post/{id}/{name}', 'PostController@show_post');
*/
//Elaquate ODB
/*Route::get('/read', function(){
	$posts=Post::all();
	foreach($posts as $post){
		echo "</br>".$post->title."</br>".$post->content;

	}
});*/
/*
Route::get('/find', function(){
	$post=Post::find(2);
	return $post->title;
});

Route::get('/post/{title}/{content}', function($title, $content){
	DB::insert('insert into post_table(`title`, `content`) values(?, ?) ',[$title, $content]);
});

Route::get('/insert', function(){
	DB::insert('insert into users(`name`,`description`) values(?, ?) ',['Bekzod','I am lucky\n boy']);	
});*/

/*Route::get('findwhere', function(){
	$posts=Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();
	foreach ($posts as $post) {
	echo $post->title;
	}
});



Route::get('findmore', function(){
	$posts=Post::all();//where('id','>',1)->firstOrFail();
	foreach ($posts as $post) {
	  echo $post->title;
	}
});*/




/*Route::get('/basicinsert', function(){
  $post = new Post;
  $post->title='New eloquent title';
  $post->content='This is cool eloquent ORM model content';

  $post->save();
});*/

/*Route::get('/basicupdate', function(){
  $post = Post::find(1);
  //if($post){
  $post->title='Bootstrap';
  $post->content='This is cool and new eloquent ORM model content';
  $post->save();
  //}
});*/


/*Route::get('create-new', function(){

	Post::create(['title'=>'My new title', 'content'=>'my new content model in ORM']);

});*/
/*

Route::get('update-new', function(){

	Post::where('id', 1)->update(['content'=>'Thsi is my update content');

});*/


/*Route::get('delete-new', function(){

	$post=Post::find(1);
	$post->delete();

	//Post::destroy(4);

	Post::where('id',3)->delete();
});


Route::get('/softdelete', function(){
	Post::find(4)->delete();
});
Route::get('/retrivedelete', function(){
	$post=Post::withTrashed()->where('id',4)->get();
	return $post;
});


Route::get('/restoredata', function(){
	$post=Post::withTrashed()->where('id',4)->restore();
	return $post;
});

Route::get('/forcedeletetrashed', function(){
	Post::onlyTrashed()->forceDelete();
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

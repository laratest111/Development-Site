<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/index','userController@index');

Route::get('/user/{id}','userController@show');  // print user data that has given (Id)
                                                    // by call show()  function in userController.php class.
                                                    //Route::resource('/users','userController');


Route::get('/tasks','TasksController@index');

Route::get('/tasks/{id}','TasksController@show');


//Route::resource('/books','BookController');




Route::get('/template',function (){
    return view('admin.template');
});


Route::get('/','PagesController@index')->name('home') ;

Route::get('pages/create','PagesController@create');

Route::post('/pages','PagesController@store');

Route::get('/pages/{id}','PagesController@show');

//Route::get('/edit','PagesController@edit');

//Route::resource('/pages','PagesController');


Route::post('/pages/{post}/comments','CommentsController@store');



Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');


Route::get('/sales',function (){
    return view('pages.sales');
});


Route::get('/visitors',function (){
    return view('pages.visitors');
});

Route::get('/chat',function (){
    return view('pages.chat');
});





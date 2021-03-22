<?php

// User Routes
Route::group(['namespace'=>'User'],function(){

     Route::get('/','HomeController@index');
     Route::get('post/{post}','PostController@post')->name('post');

     Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
     Route::get('post/category/{category}','HomeController@category')->name('category');


});

//Auth Routes
Route::group(['namespace'=>'User\Auth'],function(){
     Route::get('login','LoginController@showLoginForm')->name('login');
     Route::post('login','LoginController@login');
     Route::post('logout','LoginController@logout')->name('logout');
     Route::get('register','RegisterController@showForm')->name('register');
     Route::post('create_user','RegisterController@createUser')->name('register.user');
     
});


//Admin Routes
Route::group(['namespace'=>'Admin'],function(){

       Route::get('admin/home','HomeController@index')->name('admin.home');
       //User Routes
       Route::resource('admin/user','UserController');
       Route::get('admin/user/{id}/delete','@deUserControllerstroy')->name('admin.delete');
       //Roles Routes
       Route::resource('admin/role','RoleController');
       Route::get('admin/role/{id}/delete','RoleController@destroy')->name('admin.delete');
        //Permission Routes
        Route::resource('admin/permission','PermissionController');
       //Post Routes
       Route::resource('admin/post','PostController');
       Route::get('admin/post/{id}/delete','PostController@delete')->name('post.delete');
       //Tag Routes
       Route::resource('admin/tag','TagController');
       //category Routes
       Route::resource('admin/category','CategoryController');

       Route::get('admin/login','Auth\LoginController@showLoginForm')->name('admin.login');
       Route::post('admin/login','Auth\LoginController@login');
       Route::post('admin/logout','Auth\LoginController@logout')->name('admin.logout');
       //Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('admin.logout');

     //   //   Admin /Auth/Routes
     //    Route::get('admin-login',Auth\LoginController);
     
    
});


//Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

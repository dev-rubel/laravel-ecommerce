<?php

//admin login
Route::get('admin', 'LoginController@adminIndex')->name('admin.login');
Route::post('admin', 'LoginController@adminPosted');

//admin dashboard
Route::group(['middleware' => 'admin'], function(){
 
    Route::get("/admin_panel", 'admin_panel\DashboardController@index')->name('admin.dashboard');
    Route::get('admin/logout', 'LoginController@adminLogout')->name('admin.logout');    //categories
    Route::get('/admin_panel/categories', 'admin_panel\CategoriesController@index')->name('admin.categories');
    Route::post('/admin_panel/categories', 'admin_panel\CategoriesController@posted');
    Route::get('/admin_panel/categories/edit/{id}', 'admin_panel\CategoriesController@edit')->name('admin.categories.edit');
    Route::post('/admin_panel/categories/edit/{id}', 'admin_panel\CategoriesController@update');
    Route::get('/admin_panel/categories/delete/{id}', 'admin_panel\CategoriesController@delete')->name('admin.categories.delete');
    Route::post('/admin_panel/categories/delete/{id}', 'admin_panel\CategoriesController@destroy');

    //products
    Route::get('/admin_panel/products', 'admin_panel\ProductsController@index')->name('admin.products');
    Route::get('/admin_panel/products/create', 'admin_panel\ProductsController@create')->name('admin.products.create');
    Route::post('/admin_panel/products/create', 'admin_panel\ProductsController@store');
    Route::get('/admin_panel/products/edit/{id}', 'admin_panel\ProductsController@edit')->name('admin.products.edit');
    Route::post('/admin_panel/products/edit/{id}', 'admin_panel\ProductsController@update');
    Route::get('/admin_panel/products/delete/{id}', 'admin_panel\ProductsController@delete')->name('admin.products.delete');
    Route::post('/admin_panel/products/delete/{id}', 'admin_panel\ProductsController@destroy');

    //order management 
    Route::get('/admin_panel/management', 'admin_panel\ManagementController@manage')->name('admin.orderManagement');
    Route::post('/admin_panel/management', 'admin_panel\ManagementController@update')->name('admin.orderUpdate');

});

//user login
Route::get('/login', 'LoginController@userIndex')->name('user.login');
Route::post('/login', 'LoginController@userPosted');

//signup
Route::get('/signup', 'SignupController@userIndex')->name('user.signup');
Route::post('/signup', 'SignupController@userPosted');
Route::post('/check_email', 'SignupController@emailCheck')->name('user.signup.check_email');

//user
Route::get('/', 'user\UserController@index')->name('user.home');
Route::get('/view/{id}', 'user\UserController@view')->name('user.view');
Route::post('/view/{id}', 'user\UserController@post');

//search
Route::get('/search', 'user\UserController@search')->name('user.search');
Route::get('/search?c={id}', 'user\UserController@view')->name('user.search.cat');

//product view
Route::get('/product/{id}', 'user\UserController@view')->name('user.product');

//cart
Route::get('/cart', 'user\UserController@cart')->name('user.cart');
Route::post('/cart', 'user\UserController@confirm');
Route::post('/edit_cart', 'user\UserController@editCart')->name('user.editCart');
Route::post('/delete_item_from_cart', 'user\UserController@deleteCartItem')->name('user.deleteCartItem');

//logout
Route::get('/logout', 'LoginController@userLogout')->name('user.logout');

Route::group(['middleware' => 'user'], function(){
    Route::get('/history', 'user\UserController@history')->name('user.history');
});

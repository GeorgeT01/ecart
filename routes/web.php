<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/* ====================[[ADMIN]]==================== */

/* ====================[Auth]==================== */
Route::get('admin', 'Admin\Auth\LoginController@index');
Route::post('login', 'Admin\Auth\LoginController@login');
Route::get('logout', 'Admin\Auth\LogoutController@logout');

/* ====================[User Manager]==================== */
Route::get('user_manager', 'Admin\UserManagerController@index');
Route::get('users', 'Admin\UserManagerController@getUsers');
Route::get('add_user', 'Admin\UserManagerController@addUserView');
Route::post('add_new_user', 'Admin\UserManagerController@addUser');
Route::get('delete_user/{user_id}', 'Admin\UserManagerController@deleteUser');

/* ====================[Settings]==================== */
Route::get('settings', 'Admin\SettingsController@index');
Route::post('change_name', 'Admin\SettingsController@changeName');
Route::post('change_username', 'Admin\SettingsController@changeUsername');
Route::post('change_password', 'Admin\SettingsController@changePassword');
Route::post('delete_account', 'Admin\SettingsController@deleteAccount');


Route::get('dashboard', 'Admin\DashboardController@index');

Route::get('categories', 'Admin\CategoryController@index');
Route::get('all_categories', 'Admin\CategoryController@getCategories');
Route::get('category/{id}', 'Admin\CategoryController@getCategory');
Route::get('change_status/{status}/{id}', 'Admin\CategoryController@changeStatus');
Route::post('add_category', 'Admin\CategoryController@addCategory');
Route::put('edit_category/{id}', 'Admin\CategoryController@editCategory');
Route::delete('delete_category/{id}', 'Admin\CategoryController@deleteCategory');


Route::get('products', 'Admin\ProductController@index');
Route::get('all_products', 'Admin\ProductController@getProducts');
Route::post('add_product', 'Admin\ProductController@addProduct');
Route::delete('delete_product/{id}', 'Admin\ProductController@deleteProduct');
Route::get('product_status/{status}/{id}', 'Admin\ProductController@changeStatus');
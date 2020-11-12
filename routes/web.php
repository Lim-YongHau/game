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



Route::group(['middleware' => ['auth','admin']],function (){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

});


Route::get('/role-register',[
    'uses'=>'Admin\DashboardController@registered',
    'as'=>'role.register'
]);

Route::get('/role-edit/{id}',[
    'uses'=>'Admin\DashboardController@registeredit',
    'as'=>'edit.register'
]);

Route::put('/role-register-update/{id}',[
    'uses'=>'Admin\DashboardController@registerupdate',
    'as'=>'update.register'
]);

Route::delete('/role-delete/{id}',[
    'uses'=>'Admin\DashboardController@registerdelete', 
    'as'=>'delete.register'
]);


Route::get('/UserProfile',[
    'uses'=>'Admin\DashboardController@userProfile',
    'as'=>'role.user'
]);

Route::get('/profile-edit/{id}',[
    'uses'=>'Admin\DashboardController@profileedit',
    'as'=>'edit.profile'
]);

Route::put('/profile-update/{id}',[
    'uses'=>'Admin\DashboardController@profileupdate',
    'as'=>'update.profile'
]);


Route::get('/insertProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);


Route::get('/insertCategory',[
    'uses'=>'CategoryController@create', 
    //uses will call the controller on create function
    'as'=>'category'
    // as is using on view 
]);

Route::post('/addCategory/store',[  // define your self
    'uses'=>'CategoryController@store',
    'as'=>'addCategory.store'    // check the charactor when you copy paste from PPT
]);


Route::get('/insertProductCategory',[
    'uses'=>'ProductCategoryController@create', 
    //uses will call the controller on create function
    'as'=>'productcategory'
    // as is using on view 
]);

Route::post('/addProductCategory/store',[  // define your self
    'uses'=>'ProductCategoryController@store',
    'as'=>'addProductCategory.store'    // check the charactor when you copy paste from PPT
]);


Route::post('/addProduct/store',[  // define your self
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'    // check the charactor when you copy paste from PPT
]);

Route::get('/allproduct',[
    'uses'=>'ProductController@show', 
    'as'=>'all.product'
]);





Route::get('/allproduct/delete/{id}',[
    'uses'=>'ProductController@delete', 
    'as'=>'delete.product'
]);

Route::get('/editproduct/{id}',[
    'uses'=>'ProductController@edit', 
    'as'=>'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);

Route::post('searchproduct', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);



Route::get('/products',[
    'uses'=>'productShow@showProducts', 
    'as'=>'products'
]);

Route::get('/products/{id}',[
    'uses'=>'productShow@showProductDetail', 
    'as'=>'product.detail'
]);

Route::post('/addToCart',[
    'uses'=>'CartController@add',
    'as'=>'add.to.cart'
]);

Route::get('/myCart',[
    'uses'=>'CartController@show', 
    'as'=>'my.cart'
]);

Route::get('/myCart/delete/{id}',[
    'uses'=>'CartController@delete', 
    'as'=>'delete.cart'
]);

Route::post('/createorder',[
    'uses'=>'OrderController@add',
    'as'=>'create.order'
]);

Route::get('/myorder',[
    'uses'=>'OrderController@show',
    'as'=>'my.order'
]);

Route::get('/insertFeedback',[
    'uses'=>'FeedbackController@create',
    'as'=>'insertFeedback'
]);

Route::post('/addFeedback/store',[  // define your self
    'uses'=>'FeedbackController@store',
    'as'=>'addFeedback.store'    // check the charactor when you copy paste from PPT
]);

Route::get('/allfeedback',[
    'uses'=>'FeedbackController@show', 
    'as'=>'all.feedback'
]);

Route::get('/allfeedback/delete/{id}',[
    'uses'=>'FeedbackController@delete', 
    'as'=>'delete.feedback'
]);



Route::get('/AdminOrderDetail',[
    'uses'=>'AdminOrderController@show',
    'as'=>'admin.orderdetail'
]);

Route::get('/EditOrderDetail/{id}',[
    'uses'=>'AdminOrderController@Orderedit',
    'as'=>'edit.order'
]);

Route::post('/AdminOrderDetail-update',[
    'uses'=>'AdminOrderController@Orderupdate',
    'as'=>'update.order'
]);

Route::get('/AdminOrderDetail/delete/{id}',[
    'uses'=>'AdminOrderController@Orderdelete', 
    'as'=>'delete.order'
]);


// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



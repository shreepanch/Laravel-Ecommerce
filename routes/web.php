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

// Route::get('/', function () {
//     return view('welcome');
// });






Auth::routes();

Route::get('/test', 'TestController@index')->name('test');
Route::get('/test', 'TestController@index')->name('test');
Route::get('/about', 'TestController@about')->name('about');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/', 'HomeController@site')->name('home');


///Simple User Login///
Route::get('/user/register','UsersController@register')->name('user_register');

Route::post('/user/register','UsersController@store')->name('user.store');

Route::get('/user/login','UsersController@login')->name('user_login');

Route::get('/user/logout', 'UsersController@logout')->name('user_logout');

Route::post('/user/login','UsersController@authenticate')->name('user.login');



///Order_detail////

Route::get('/user/order/{id}', 'UsersController@order_create')->name('user.order.create');















///Admin Location///
Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('auth')->group(function () {	
	Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/news', 'NewsController');
    Route::resource('/products', 'ProductsController');
    Route::get('/testhome', 'HomeController@test')->name('testhome');
    Route::resource('/customers', 'CustomersController');
    Route::resource('/order', 'OrderController');
    Route::get('/payments/', 'PaymentController@index')->name('payments.index');
    Route::get('/payment/create/{id}', 'PaymentController@create')->name('payment.create');
    Route::post('/payment/create', 'PaymentController@store')->name('payments.store');
    Route::post('/payment/index', 'PaymentController@update')->name('payments.store');
});







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


Route::get('/logout', 'Auth\LoginController@logout')->name('logout'); //
//Route::get('/login205025',function(){
//   // Auth::loginUsingId(1, true);
//    echo('done');
//} ); //

Auth::routes(['register' => false]);

Route::get('/', 'SystemController@dashboard')->name('system.dashboard');


Route::resource('/home-slider', HomeSliderController::class);
Route::resource('/testimonials', TestimonialController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/certificates', CertificateController::class);
Route::resource('/blogs', BlogController::class);
Route::resource('/clients', ClientController::class);
Route::resource('/projects', ProjectsController::class);
Route::resource('/our-activities', OurActivitieController::class);



Route::get('/staff/change-password', 'StaffController@changePassword')->name('system.staff.change-password');
Route::post('/staff/change-password', 'StaffController@changePasswordPost')->name('system.staff.change-password-post');
Route::resource('/staff','StaffController',['as'=>'system']); 


Route::resource('/permission-group','PermissionGroupsController',['as'=>'system']); //

// -- Setting
Route::get('/setting', 'SettingController@index')->name('system.setting.index'); //
Route::patch('/setting', 'SettingController@update')->name('system.setting.update'); //
// -- Setting

Route::get('/ajax','AjaxController@index')->name('system.misc.ajax'); //

Route::get('/notifications/{ID}', 'NotificationController@url')->name('system.notifications.url');
Route::get('/notifications', 'NotificationController@index')->name('system.notifications.index');

Route::get('/activity-log/{ID}', 'ActivityController@show')->name('system.activity-log.show'); //
Route::get('/activity-log', 'ActivityController@index')->name('system.activity-log.index'); //

Route::get('/auth-sessions', 'AuthSessionController@index')->name('system.staff.auth-sessions');
Route::delete('/auth-sessions', 'AuthSessionController@deleteAuthSession')->name('system.staff.delete-auth-sessions');

// Route::any('posts', 'PostController')->name('system.crud.posts');
//Route::resource('/payment-methods','PaymentMethodController',['as'=>'system']); //
// Route::resource('/orders','OrdersController',['as'=>'system']); 
// Route::resource('/users','UsersController',['as'=>'system']); 
// Route::resource('/drivers','DriversController',['as'=>'system']); 
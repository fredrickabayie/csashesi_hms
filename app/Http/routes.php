<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/register', function () {
//   return View::make('auth.register');
//});

//Route::get('/details', function () {
//   $details = Hms\UserDetail::all();
//
//    foreach($details as $detail) {
////        $user = Hms\User::findOrNew($detail->user_id);
//        echo $detail->phone . " Username " . $detail->user->name ."<br/>";
//    }
//});
//
//Route::get('user/{id}', function($id) {
//    $user = Hms\User::findOrNew($id);
//    echo 'My name is '. $user->name . '<br />';
//    $detail = $user->userDetail;
//    echo $detail->phone;
//});
//
//Route::get('getUser', function() {
//   $user = Hms\User::where('email', '=', 'fredrick.abayie@ashesi.edu.gh')->first();
//    echo $user->email;
//});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/profile', 'HomeController@profile');

    Route::get('/patient', 'PatientController@index');
});

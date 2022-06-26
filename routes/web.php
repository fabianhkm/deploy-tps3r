<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SSOBrokerController;

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

// Route::get('backend/login', [SSOBrokerController::class, 'authenticateToSSO']);
// Route::get('authenticateToSSO', [SSOBrokerController::class, 'authenticateToSSO']);
// Route::get('authData/{authData}', [SSOBrokerController::class, 'authenticateToSSO']);
// Route::get('logout/{sessionId}', [SSOBrokerController::class, 'logout']);
// Route::get('logout', [SSOBrokerController::class, 'logout']);
// Route::get('changeRole/{role}', [SSOBrokerController::class, 'changeRole'])->name('changeRole');

// Route::group(['middleware' => ['SSOBrokerMiddleware']], function () {
//     Route::get('test', function(){
//        return 'test';   
//     });
//     Route::get('/backend', function () {
//         return view('backend.welcome');
//     });
// });

// landing 

Route::get('/', function () {
    return view('landing.index');
});

Route::get('blog', function () {
    return view('landing.blog');
});

Route::get('about', function () {
    return view('landing.about');
});

Route::get('service', function () {
    return view('landing.service');
});

Route::get('contact', function () {
    return view('landing.contact');
});

Route::get('blog-single', function () {
    return view('landing.blog-single');
});

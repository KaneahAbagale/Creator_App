<?php

use App\Http\Controllers\ArtController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\HomeController;
use App\Http\Controllers\WalletController;

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

Route::get('/wallet', [WalletController::class, 'show'])->name('wallet');
//Route::get('/wallet', [App\Http\Controllers\WalletController::class, "wallet"])->name('wallet');


Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
        //Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

        Route::get('/payment.index', [App\Http\Controllers\PaymentController::class, 'index']);

        Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

        Route::get('/payment.index/{id}', [PaymentController::class, 'show']);

        Route::get('make-payment/{amount}/{content}/{reference}', [PaymentController::class, 'store'])->name('pay');

        Route::get('/dashboard', [HomeController::class,"dashboard"])->name('dashboard');
        Route::resources([
            'music' => MusicController::class,
            'art' => ArtController::class,
            'content' => ContentController::class,
            //'wallet' => WalletController::class,
            'payment' => PaymentController::class,

        ]);

//Route::get('checkout', function () {return view('payment');
    //});              
});


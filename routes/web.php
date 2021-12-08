<?php

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\MailController;
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
    return view('galery');
});


Route::get('/crud', function () {
    return view('crud');
});

Route::get('/mail', [MailController::class, 'syncMail']);
Route::get('/async-mail', [MailController::class, 'asyncMail']);
Route::get('/async-mail-welcome', [MailController::class, 'asyncMailWelcome']);
Route::get('/async-job', [MailController::class, 'usingJob']);
Route::get('/sync-job', [MailController::class, 'usingJobSinc']);
Route::get('/async-job-redis', [MailController::class, 'usingJobRedis']);
Route::get('/estoque-job', [EstoqueController::class, 'movimentar']);
Route::get('/estoque-job-dispatch', [EstoqueController::class, 'jobDispatch']);


Route::get('redisAdd', function () {
   \Illuminate\Support\Facades\Redis::set('name', \Illuminate\Support\Facades\Hash::make('Felipe'));
   return \Illuminate\Support\Facades\Redis::get('name');
});

Route::get('redisGet', function () {
    return \Illuminate\Support\Facades\Redis::get('name');
});

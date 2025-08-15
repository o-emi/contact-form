<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// view ファイルを表示する処理の作成
Route::get('/', [ContactController::class, 'index']);
// 1-4　フォーム入力ページの送信ボタン
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
// 入力内容確認ページの送信ボタン
Route::post('/contacts', [ContactController::class, 'store']);
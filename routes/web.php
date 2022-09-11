<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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
Route::get('/hello',function(){
    return view('hello-world',['message'=>'Hello world']);
});
Route::get('get-time',function(){
    $time = Carbon::now()->format('H:i:s');
    return view('get-time',['time'=> $time]);
});
Route::get('/json-encoding',function (){
    $list = timezone_identifiers_list();
    return view('json-encoding',["array" => $list]);
});
Route::get('foreach',function (){
    $users = User::all();
    return view('foreach-directive',['users' => $users]);
});

//If Statements

Route::get('if',function(){
    $isTrue = true;
    return view('if-statement-directive',['isTrue' => $isTrue]);
});

//Unless Directive
Route::get('unless-directive',function (){
    return view('unless-directive');
});

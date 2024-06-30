<?php

use App\Events\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('show-websocket', function () {
    return view('websocket-show');
})->name("websocket.show");

Route::post("order-status-select",function(Request $request){
    OrderShipped::dispatch($request->status);
    return back()->with("message","Event is dispatch!");
})->name("status-update");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


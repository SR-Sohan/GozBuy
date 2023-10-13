<?php

use App\Http\Controllers\Admin\Admin;
use Illuminate\Support\Facades\Route;




// Admin  Routes
Route::prefix('admin')->group(function(){

    //Page Routes
    Route::get("/",[Admin::class,"page"]);

});

<?php

use Illuminate\Support\Facades\Route;
use Olee\Inventory\Controllers\SalesOrderController; 
use Olee\Inventory\Controllers\ItemsController; 

Route::get('test', 'olee\inventory\controllers\ItemsController@index');


Route::group(['middleware' => ['web']], function () {


    Route::get('/find',  function () {
        // Validate the request...
    
        return redirect()->back()->with('message', 'IT WORKS!');
    })->name('find');


    Route::resource('items', olee\inventory\controllers\ItemsController::class);
    Route::post('items/find', [ItemsController::class, 'find'])->name('items.find');


    Route::resource('salesOreder', olee\inventory\controllers\SalesOrderController::class);
    Route::post('salesOreder/search', [SalesOrderController::class, 'search'])->name('salesOreder.find');

});





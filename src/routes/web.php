<?php

use Illuminate\Support\Facades\Route;
use olee\inventory\controllers\SalesOrderController; 
use olee\inventory\controllers\ItemsController; 

Route::get('test', 'olee\inventory\controllers\ItemsController@index');

Route::group(['middleware' => ['web']], function () {
    Route::resource('items', olee\inventory\controllers\ItemsController::class);
    Route::post('items/find', [ItemsController::class, 'find'])->name('items.find');


    Route::resource('salesOreder', olee\inventory\controllers\SalesOrderController::class);
    Route::post('salesOreder/search', [SalesOrderController::class, 'search'])->name('salesOreder.find');

});





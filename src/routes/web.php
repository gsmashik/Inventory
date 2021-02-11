<?php

use Illuminate\Support\Facades\Route;
use olee\inventory\controllers\SalesOrderController; 
Route::get('test', 'olee\inventory\controllers\ItemsController@index');

Route::group(['middleware' => ['web']], function () {
    Route::resource('items', olee\inventory\controllers\ItemsController::class);
    Route::resource('salesOreder', olee\inventory\controllers\SalesOrderController::class);
    Route::post('salesOreder/search', [SalesOrderController::class, 'search'])->name('salesOreder.find');

});





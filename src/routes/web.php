<?php

use Illuminate\Support\Facades\Route;
use Olee\Inventory\Controllers\SalesOrderController; 
use Olee\Inventory\Controllers\ItemsController; 
use Olee\Inventory\Controllers\MoneyReceiptController; 

Route::get('test', 'olee\inventory\controllers\ItemsController@index');


Route::group(['middleware' => ['web']], function () {


    Route::get('/find',  function () {
        // Validate the request...
    
        return redirect()->back()->with('message', 'IT WORKS!');
    })->name('find');


    Route::resource('items', Olee\Inventory\Controllers\ItemsController::class);
    Route::post('items/find', [ItemsController::class, 'find'])->name('items.find');
    Route::get('items/{btn}', [ItemsController::class, 'show'])->name('items.fbtn');


    Route::resource('salesOreder', Olee\Inventory\Controllers\SalesOrderController::class);
    Route::post('salesOreder/search', [SalesOrderController::class, 'search'])->name('salesOreder.find');




    Route::resource('moneyreceipt', Olee\Inventory\Controllers\MoneyReceiptController::class);
    Route::post('moneyreceipt/find', [MoneyReceiptController::class, 'find'])->name('moneyreceipt.find');
    Route::post('moneyreceipt/updateall', [MoneyReceiptController::class, 'updateall'])->name('moneyreceipt.updateall');

});





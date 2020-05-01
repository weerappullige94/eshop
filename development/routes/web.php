<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);

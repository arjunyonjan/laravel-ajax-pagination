<?php

Route::get('/', function()
{
	$products  = Product::paginate(10);
	return View::make('index',['products' => $products]);
});

Route::get('/ajax/product',function(){

	$products = Product::paginate(10);
	return View::make('products',['products' => $products])->render();

});
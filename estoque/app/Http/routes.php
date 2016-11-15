<?php

	Route::get('/', function() {
		return '<h1>Listagem de produtos</h1>';
	});

	Route::get('/products', 'ProductController@list_products');
	Route::get('/product/details/{id}', 'ProductController@product_details');
	Route::get('/product/new', 'ProductController@new');
	Route::post('/product/add_product', 'ProductController@add_product');

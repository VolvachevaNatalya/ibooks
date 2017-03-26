<?php

    #cms
    Route::get('cms/dashboard', 'CmsController@dashboard');
    Route::get('cms/orders', 'CmsController@orders');
    Route::resource('cms/menu', 'MenuController');
    Route::resource('cms/content', 'ContentController');
    Route::resource('cms/categories', 'CategoriesController');
    Route::resource('cms/authors', 'AuthorsController');
    Route::resource('cms/products', 'ProductsController');
    Route::resource('cms/users', 'UsersController');


    #User
    Route::get('user/signin', 'UserController@getSignin');
    Route::get('user/logout', 'UserController@getLogout');
    Route::get('user/signup', 'UserController@getSignup');
    Route::post('user/signin', 'UserController@postSignin');
    Route::post('user/signup', 'UserController@postSignup');
    Route::get('user/order', 'UserController@getOrders');
    Route::get('contact-us', 'ContactController@getContact');
    Route::post('contact-us', 'ContactController@postContact');

    Route::get('user/myorders', 'ContactController@getMyOrders');



    Route::get('user/forgot', 'ContactController@getForgotPass');
    Route::post('user/forgot', 'ContactController@postForgotPass');



    #Shop
    Route::get('categories', 'ShopController@categories');
    Route::get('shop/order', 'ShopController@order');
    Route::get('shop/update-cart', 'ShopController@updateCart');
    Route::get('shop/clear-cart', 'ShopController@clearCart');
    Route::get('shop/checkout', 'ShopController@checkout');
    Route::get('shop/add-to-cart', 'ShopController@addToCart');
    Route::get('author/{author_url}', 'ShopController@productsAuthor');
    Route::get('category/{category_url}', 'ShopController@productsCategorie');

    Route::get('book/{product_url}', 'ShopController@item');


    #Author
    Route::get('authors', 'ShopController@authors');

    Route::get('books', 'ShopController@books');


    Route::get('books/price_asc', 'ShopController@booksAsc');
    Route::get('books/price_desc', 'ShopController@booksDesc');




    #Pages
    Route::get('/', 'PagesController@home');
    Route::get('{url}', 'PagesController@boot');
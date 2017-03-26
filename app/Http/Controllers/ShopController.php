<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use App\Order;
use Cart;
use Session;

class ShopController extends MainController {

    public function categories(){
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] = 'Shop categories';
        return view('content.categories', self::$data);
    }

    public function authors(){
        self::$data['authors'] = Author::all()->toArray();
        self::$data['title'] = 'Authors';
        return view('content.authors', self::$data);

    }


    public function books(){

//        self::$data['products'] = Product::all()->toArray();
        self::$data['title'] = 'Books';
        Product::getAllProducts(self::$data);
        return view('content.books', self::$data);

    }


    public function productsCategorie($category_url){
        self::$data['title'] = 'Books of the category';
        Product::getAllProducts(self::$data, ['category'=>$this->mysql_escape($category_url)]);
//        Product::getProductsByCategorie($category_url, self::$data);
        return view('content.books', self::$data);
    }

    public function productsAuthor($author_url){
        self::$data['title'] = 'Books of the author';
        Product::getAllProducts(self::$data, ['author'=>$this->mysql_escape($author_url)]);
//        Product::getProductsByAuthor($author_url, self::$data);
        return view('content.books', self::$data);
    }

    public function booksAsc(){
        self::$data['title'] = 'Books';
        Product::getAllProducts(self::$data, ['price_asc'=>true]);
        return view('content.books', self::$data);

    }

    public function booksDesc(){
        self::$data['title'] = 'Books';
        Product::getAllProducts(self::$data, ['price_desc'=>true]);
        return view('content.books', self::$data);

    }


    public function item($product_url){
        Product::getItem($product_url, self::$data);
        return view('content.item', self::$data);
    }

    public function addToCart(Request $request){
        Product::addToCart($request['id']);
    }

    public function checkout(){
        self::$data['title'] = 'Checkout page';
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        sort($cart);
        self::$data['cart'] = $cart;
        return view('content.checkout', self::$data);
    }

    public function clearCart(){
        Cart::clear();
        return redirect('shop/checkout');
    }

    public function updateCart(Request $request){
        Product::cartUpdate($request['id'], $request['op']);
    }

    public function order(){

        if( ! Session::has('user_id') ){
            Session::flash('sm', 'You must signin to place your order');
            return redirect('user/signin?returnTo=shop/checkout');
        } else {
            Order::saveOrder();
            return redirect('books');
        }

    }


    public function mysql_escape($inp)
    {
        if(is_array($inp)) return array_map(__METHOD__, $inp);

        if(!empty($inp) && is_string($inp)) {
            return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
        }

        return $inp;
    }



}
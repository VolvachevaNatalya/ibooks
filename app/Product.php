<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;

class Product extends Model{
    static public function getProductsByCategorie($category_url, &$data){

        $data['products'] = [];

        if( $category = Categorie::where('url', '=', $category_url)->first() ){

            $category = $category->toArray();
            $data['title'] = $category['title'] . ' products';
            $data['cat_url'] = $category_url;


            if( $products = Categorie::find($category['id'])->products){

                $data['products'] = $products->toArray();
            }


        }
    }


    static public function getProductsByAuthor($author_url, &$data){

        $data['products'] = [];

        if( $author = Author::where('url', '=', $author_url)->first() ){

            $author = $author->toArray();
            $data['title'] = $author['title'] . ' products';
            $data['cat_url'] = $author_url;


            if( $products = Author::find($author['id'])->products){

                $data['products'] = $products->toArray();
            }


        }
    }

    static public function getItem($product_url, &$data){

        $data['product'] = [];
        $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
            . "JOIN authors a ON p.author_id = a.id "
            . "WHERE p.url = '" . $product_url. "'";
        if(count(DB::select($sql))){
            $product = DB::select($sql);
            $data['product'] = $product[0];
            $data['title'] = $data['product']->title;
        }



//        if($product = self::where('url' , '=' , $product_url)->first() ){
//            $product = $product->toArray();
//            $data['product'] = $product;
//            $data['title'] = $product['title'];
//
//        }

    }

    static public function addToCart($product_id){

        if( $product = self::find($product_id)){

            $product = $product->toArray();

            if( !Cart::get($product_id)){
                Cart::add($product_id, $product['title'], $product['price'], 1, []);
                Session::flash('sm', $product['title']. ' is added to cart');

            }
        }

    }

    static public function cartUpdate($id, $op){

        if( $product = Cart::get($id) ){

            if( $op == 'plus'){

                Cart::update($id, ['quantity' => 1,]);



            } else if($op == 'minus'){

                $product = $product->toArray();

                if($product['quantity'] - 1 == 0){

                    Cart::remove($id);


                } else {

                    Cart::update($id, ['quantity' => -1,]);

                }



            }
        }

    }

    static public function saveProduct($request){

        $image_name = 'default.jpg';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images', $image_name);
        }

        $product = new self();
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->url = $request['url'];
        $product->image = $image_name;
        $product->price = $request['price'];
        $product->categorie_id = $request['category'];
        $product->author_id = $request['author'];
        $product->save();
        Session::flash('sm', 'New product has been saved');

    }

    static public function updateProduct($request, $id) {

        $image_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
        }

        $product = self::find($id);
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->url = $request['url'];

        if($image_name){
            $product->image = $image_name;
        }

        $product->price = $request['price'];
        $product->categorie_id = $request['category'];
        $product->author_id = $request['author'];
        $product->save();
        Session::flash('sm', 'Product has been updated');
    }


    static public function getAllProducts(&$data, $filter=['all'=>true]){

        $data['products'] = [];
        switch(key($filter)){
            case "all":
                $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
                    . "JOIN authors a ON p.author_id = a.id ";
                break;
            case "author":
                $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
                    . "JOIN authors a ON p.author_id = a.id "
                    . "WHERE a.url = '" . $filter['author']. "'";
                break;

            case "category":

                $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
                    . "JOIN authors a ON p.author_id = a.id "
                    . "RIGHT JOIN categories c ON p.categorie_id = c.id "
                    . "WHERE c.url = '" . $filter['category']. "'";
                break;


            case "price_asc":

                $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
                    . "JOIN authors a ON p.author_id = a.id "
                    . "ORDER BY p.price ASC";
                break;

            case "price_desc":

                $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
                    . "JOIN authors a ON p.author_id = a.id "
                    . "ORDER BY p.price DESC";
                break;




        }

//        $sql = "SELECT p.*,a.title AS author_name,a.url AS author_url FROM products p "
//            . "JOIN authors a ON p.author_id = a.id ";
////            . "WHERE u.email = ?";
        $data['products'] = DB::select($sql);


    }

}

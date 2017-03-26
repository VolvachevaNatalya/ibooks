<?php

namespace App\Http\Controllers;

use App\Author;
use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use Session;


class ProductsController extends MainController{

    function __construct() {
        parent::__construct();
        $this->middleware('adminvalid');
    }

    public function index() {
        self::$data['products'] = Product::all()->toArray();
        return view ('cms.products', self::$data);
    }


    public function create() {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['authors'] = Author::all()->toArray();
        return view('cms.add_product', self::$data);
    }


    public function store(ProductRequest $request) {
        Product::saveProduct($request);
        return redirect('cms/products');
    }


    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_product', self::$data);
    }


    public function edit($id) {
        self::$data['product'] = Product::find($id)->toArray();
        Categorie::getOrdered(self::$data['product']['categorie_id'], self::$data);
        Author::getOrdered(self::$data['product']['author_id'], self::$data);
        return view('cms.edit_product', self::$data);
    }

    public function update(ProductRequest $request, $id)  {
        Product::updateProduct($request, $id);
        return redirect('cms/products');
    }


    public function destroy($id) {
        Product::destroy($id);
        Session::flash('sm', 'Product has been deleted');
        return redirect('cms/products');
    }
}

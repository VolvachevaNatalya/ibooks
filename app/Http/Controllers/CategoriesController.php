<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Categorie;
use Session;


class CategoriesController extends MainController{

    function __construct() {
        parent::__construct();
        $this->middleware('adminvalid');
    }

    public function index() {
        self::$data['categories'] = categorie::all()->toArray();
        return view ('cms.categories', self::$data);
    }


    public function create() {
        return view('cms.add_categorie', self::$data);
    }


    public function store(CategoryRequest $request) {
        Categorie::saveCategory($request);
        return redirect('cms/categories');
    }


    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_category', self::$data);
    }


    public function edit($id)  {
        self::$data['category'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$data);
    }


    public function update(CategoryRequest $request, $id)  {
        Categorie::updateCategory($request, $id);
        return redirect('cms/categories');
    }


    public function destroy($id) {
        Categorie::destroy($id);
        Session::flash('sm', 'Categorie has been deleted');
        return redirect('cms/categories');
    }
}

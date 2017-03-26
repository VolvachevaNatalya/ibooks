<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Author;
use Session;


class AuthorsController extends MainController{

    function __construct() {
        parent::__construct();
        $this->middleware('adminvalid');
    }

    public function index() {
        self::$data['authors'] = author::all()->toArray();
        return view ('cms.authors', self::$data);
    }


    public function create() {
        return view('cms.add_author', self::$data);
    }


    public function store(AuthorRequest $request) {
        Author::saveAuthor($request);
        return redirect('cms/authors');
    }


    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_author', self::$data);
    }


    public function edit($id)  {
        self::$data['author'] = Author::find($id)->toArray();
        return view('cms.edit_author', self::$data);
    }


    public function update(AuthorRequest $request, $id)  {
        Author::updateAuthor($request, $id);
        return redirect('cms/authors');
    }


    public function destroy($id) {
        Author::destroy($id);
        Session::flash('sm', 'Author has been deleted');
        return redirect('cms/authors');
    }
}

<?php

namespace App\Http\Controllers;

use App\Author;
use App\Categorie;
use App\Http\Requests\UsersRequest;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use Session;



class UsersController extends MainController{

    function __construct() {
        parent::__construct();
        $this->middleware('adminvalid');
    }

    public function index() {
        self::$data['users'] = User::all()->toArray();
        return view ('cms.users', self::$data);
    }


    public function create() {
        return view('cms.add_user', self::$data);
    }


    public function store(UsersRequest $request) {
        Users::saveUser($request);
        return redirect('cms/users');
    }


    public function show($id) {
        self::$data['id'] = $id;
        return view('cms.delete_user', self::$data);
    }


    public function edit($id) {
        self::$data['user'] = User::find($id)->toArray();
        return view('cms.edit_user', self::$data);
    }

    public function update(UsersRequest $request, $id)  {
        Users::updateUser($request, $id);
        return redirect('cms/users');
    }


    public function destroy($id) {
        Users::destroy($id);
        Session::flash('sm', 'User has been deleted');
        return redirect('cms/users');
    }
}

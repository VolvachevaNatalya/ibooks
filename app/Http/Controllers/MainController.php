<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\Route;

class MainController extends Controller {

    static public $data = ['title' => 'iBooks site'];

    function __construct() {

        self::$data['route'] = Route::getFacadeRoot()->current()->uri();
        self::$data['menu'] = Menu::all()->toArray();
        self::$data['shop'] = ['authors'=>'Authors', 'categories'=>'Categories'];

    }


}


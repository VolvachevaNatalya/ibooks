<?php

namespace App\Http\Controllers;

use App\Author;
use App\Categorie;
use Illuminate\Http\Request;
use App\Content;

class PagesController extends MainController {

    public function home(){
        self::$data['title'] = 'Home page';
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['authors'] = Author::all()->toArray();

        return view('content.home', self::$data);
    }

    public function boot($menu_url){
        Content::getContents($menu_url, self::$data);
        return view('content.boot', self::$data);
    }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, DB;

class Categorie extends Model{

    public function products() {
        return $this->hasMany('App\Product');
    }

    static public function saveCategory($request){

        $image_name = 'default.jpg';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images', $image_name);
        }

        $category = new self();
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->url = $request['url'];
        $category->image = $image_name;
        $category->save();
        Session::flash('sm', 'New category has been saved');
    }

    static public function updateCategory($request, $id){

        $image_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images', $image_name);
        }


        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->url = $request['url'];

        if($image_name){
            $category->image = $image_name;
        }

        $category->save();
        Session::flash('sm', 'Category has been updated');


    }

    static public function getOrdered($category_id, &$data){
        $sql = "SELECT * FROM categories ORDER BY "
            . "CASE WHEN id = $category_id THEN 0 ELSE id END";
        $data['categories'] = DB::select($sql);
    }



}



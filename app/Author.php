<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, DB;

class Author extends Model{

    public function products() {
        return $this->hasMany('App\Product');
    }

    static public function saveAuthor($request){

        $image_name = 'default.jpg';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images', $image_name);
        }

        $author = new self();
        $author->title = $request['title'];
        $author->article = $request['article'];
        $author->url = $request['url'];
        $author->image = $image_name;
        $author->save();
        Session::flash('sm', 'New author has been saved');
    }

    static public function updateAuthor($request, $id){

        $image_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move( public_path() . '/images', $image_name);
        }


        $author = self::find($id);
        $author->title = $request['title'];
        $author->article = $request['article'];
        $author->url = $request['url'];

        if($image_name){
            $author->image = $image_name;
        }

        $author->save();
        Session::flash('sm', 'Author has been updated');


    }

    static public function getOrdered($author_id, &$data){
        $sql = "SELECT * FROM authors ORDER BY "
            . "CASE WHEN id = $author_id THEN 0 ELSE id END";
        $data['authors'] = DB::select($sql);
    }



}



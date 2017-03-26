<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, DB;

class Menu extends Model {
    public function contents() {
        return $this->hasMany('App\Content');
    }

    static public function getOrdered($menu_id, &$data){
        $sql = "SELECT * FROM menus ORDER BY CASE WHEN id = $menu_id THEN 0 ELSE id END";
        $data['menu'] = DB::select($sql);
    }


    static public function saveMenu($request){
        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'New menu has been saved');
    }

    static public function updateMenu($request, $id){
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Menu has been updated');
    }

}
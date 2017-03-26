<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, DB;

class Users extends Model{

    public function users() {
        return $this->hasMany('App\User');
    }

    static public function saveUser($request){


        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password'] );
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO user_roles VALUES($uid, 4)");
        Session::flash('sm', 'New user has been added');
    }


    static public function updateUser($request, $id){


        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        Session::flash('sm', 'User has been updated');


    }

    static public function getOrdered($user_id, &$data){
        $sql = "SELECT * FROM users ORDER BY "
            . "CASE WHEN id = $user_id THEN 0 ELSE id END";
        $data['users'] = DB::select($sql);
    }



}



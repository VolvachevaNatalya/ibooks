<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Hash, Session;

class User extends Model {

    static public function signinValidate($email, $password) {

        $valid = false;
        $sql = "SELECT * FROM users u "
            . "JOIN user_roles r ON u.id = r.uid "
            . "WHERE u.email = ?";
        $user = DB::select($sql, [$email]);

        if ($user) {

            $user = $user[0];

            if ( Hash::check($password, $user->password) ) {
                $valid = true;
                Session::set('user_id', $user->id);
                Session::set('user_name', $user->name);

                if( $user->rid == 3 ){
                    Session::set('is_admin', true);
                }

                Session::flash('sm', $user->name . ' Welcome back');

            }
        }

        return $valid;
    }

    static public function saveUser($request){
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt( $request['password'] );
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO user_roles VALUES($uid, 4)");
        Session::flash('sm', $request['name'] . ' Your account created successfully! No you can sign in');
    }


    static public function getUserByEmail($request){
        return count(DB::select("SELECT * FROM users WHERE email = ?", [$request['email']]));

    }


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('userValid', ['except' => ['getLogout']]);
    }

    public function getSignin(){
        self::$data['title'] = 'Signin page';
        return view('forms.signin', self::$data);
    }

    public function getSignup(){
        self::$data['title'] = 'Signup page';
        return view('forms.signup', self::$data);
    }

    public function postSignin(SigninRequest $request){
        $redirect = !empty($request['returnTo']) ? $request['returnTo'] : '';
        if( User::signinValidate($request['email'], $request['password']) ){
            return redirect($redirect);
        } else {
            self::$data['title'] = 'Signin page';
            return view('forms.signin', self::$data)->withErrors('Wrong email/password combination');
        }
    }

    public function postSignup(SignupRequest $request){
        User::saveUser($request);
        return redirect('user/signin');
    }



    public function getLogout(){
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('is_admin');
        return redirect('user/signin');
    }





}
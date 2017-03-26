<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\EmailRequest;
use App\Order;
use Session;


class ContactController extends MainController{

    function __construct() {
        parent::__construct();
    }

    public function getContact(){
        if( ! Session::has('user_id') ){

            Session::flash('sm', 'You must signin to send us a message');
            return redirect('user/signin?returnTo=contact-us');
        } else {
            self::$data['title'] = 'Contact us page';
            return view('forms.contactus', self::$data);
        }

    }

    public function postContact(ContactRequest $request){
        //todo: necessary to send the message to the Admin's Email...
        Session::flash('sm', 'Your message has been sent');
        return redirect('contact-us');

    }

    public function getForgotPass(){
        return view('forms.email', self::$data);
    }

    public function postForgotPass(EmailRequest $request){

        if(User::getUserByEmail($request)){
            Session::flash('sm', 'New password has been sent to your Email address');
            return redirect('user/signin');
        }

        else {
            Session::flash('sm', 'This Email is not registered. Please, sign up to enter the site');
            return redirect('user/signup');

        }
    }

    public function getMyOrders(){

        self::$data['title'] = 'My orders';
        Order::getOrdersByUserId(self::$data);
        return view('content.myorders', self::$data);
    }



}

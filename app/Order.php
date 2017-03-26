<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session, DB;

class Order extends Model {

    static public function saveOrder(){
        $cartCollection = Cart::getContent();
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize( $cartCollection->toArray() );
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('sm', 'Your order has been saved');
    }

    static public function getOrders(&$data){
        $sql = "SELECT o.*,u.name FROM orders o "
            . "JOIN users u ON u.id = o.user_id "
            . "ORDER BY o.created_at DESC";
        $data['orders'] = DB::select($sql);
    }

    static public function getOrdersByUserId(&$data){
    $sql = "SELECT * FROM orders "
    ." WHERE user_id = ? "
    . "ORDER BY created_at DESC";
    $data['orders'] = DB::select($sql, [Session::get('user_id')]);

    }

}



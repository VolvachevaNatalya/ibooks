<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class ProductRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        $all = Input::all();
        $product_id = !empty($all['id']) ? ',' . $all['id'] : '';
        return [
            'category' => 'required',
            'title' => 'required',
            'author' => 'required',
            'url' => 'required|unique:products,url' . $product_id,
            'price' => 'required|numeric',
            'image' => 'image'

        ];
    }

}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class ContactRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
           'title' => 'required',
           'article' => 'required',
        ];
    }

}
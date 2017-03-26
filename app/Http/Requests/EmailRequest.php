<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class EmailRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
           'email' => 'required|email',
        ];
    }

}
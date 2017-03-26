<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class AuthorRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        $all = Input::all();
        $author_id = !empty($all['id']) ? ',' . $all['id'] : '';
        return [
            'title' => 'required',
            'url' => 'required|unique:categories,url' . $author_id,
            'image' => 'image'

        ];
    }

}
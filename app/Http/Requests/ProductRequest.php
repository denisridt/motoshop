<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'title' => ['required'],
            'comment' => ['required'],
            'price' => ['required', 'numeric'],
            'year' => ['required'],
        ];
    }

}

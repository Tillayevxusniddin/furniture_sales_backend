<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return request()->user()->can('product:create');
    }

    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    }
}

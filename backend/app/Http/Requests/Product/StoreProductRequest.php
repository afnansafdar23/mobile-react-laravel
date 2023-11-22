<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('products', 'name')->ignore($this->name)],
            'description' => 'required',
            'price' => 'required',
            'discounted_price' => 'nullable',
            'availability' => 'nullable',
            'features' => 'required',
            'color' => 'nullable',
            'part_number' => 'required',
            'manufacturer' => 'required',
            'sub_category_id' => 'required',
            'avatar' => 'nullable',
        ];
    }
}

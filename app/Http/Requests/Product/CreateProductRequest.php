<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
//        dd($this->all());
        $id = $this->route('product');

		return [
            'title' => 'required|unique:categories,title,'.$id.',id',
            'imageFile' => 'required|image',
            'description' => 'min:10',

		];
    }
}

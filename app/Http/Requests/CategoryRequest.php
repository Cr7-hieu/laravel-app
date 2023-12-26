<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|unique :categories',
        ];
    }
    function message():array{
        return[
            'name.required' =>'vui lòng điền tên danh mục',
            'name.unique' =>"$this->name đã tồn tại"
        ];
    }
}

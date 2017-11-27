<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class searchRequest extends FormRequest
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
        return [
            //
            // 'search_text'=>'required',
        ];
    }
    public function messages(){
        return [
            // 'search_text.required' => 'Vui lòng nhập từ khóa',
        ];
    }
}

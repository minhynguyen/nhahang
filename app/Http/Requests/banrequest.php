<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class banrequest extends FormRequest
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
            'b_ten' => 'required',
            'b_ten'=>'unique:ban',
        ];
        
    }

    public function messages()
    {
        return [
            'b_ten.required' => 'Tên Bàn Không Được Bỏ Trống',
            'b_ten.unique' => 'Bàn Này Đã Tồn Tại',
        ];
    }
}

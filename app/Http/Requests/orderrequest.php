<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class orderrequest extends FormRequest
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
            'b_ma' => 'required',
            'kv_ma' => 'required',
            
        ];
        
    }

    public function messages()
    {
        return [
            'b_ma.required' => 'Tên Bàn Không Được Bỏ Trống',
            'kv_ma.required' => 'Khu Vực Không Được Bỏ Trống',
        ];
    }
}

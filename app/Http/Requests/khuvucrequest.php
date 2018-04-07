<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class khuvucrequest extends FormRequest
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
            
        // return [
        //     'kv_ten' => 'required',
        //     'kv_ten'=>'unique:khuvuc',
        // ];

        return [
            'kv_ten' => 'required|unique:khuvuc|max:50',
        ];
        
    }

    public function messages()
    {
        return [
            'kv_ten.required' => 'Tên Khu Vực Không Được Bỏ Trống',
            'kv_ten.unique' => 'Khu Vực Này Đã Tồn Tại',
        ];
    }
}

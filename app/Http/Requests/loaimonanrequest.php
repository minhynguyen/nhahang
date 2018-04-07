<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loaimonanrequest extends FormRequest
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
            'lma_ten' => 'required|unique:loaimonan|max:50',
        ];
    }

    public function messages()
    {
        return [
            'lma_ten.required' => 'Tên Loại Món Ăn Không Được Bỏ Trống',
            'lma_ten.unique' => 'Loại Món Ăn Này Đã Tồn Tại',
        ];
    }
}

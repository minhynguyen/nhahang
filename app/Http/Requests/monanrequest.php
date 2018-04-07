<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class monanrequest extends FormRequest
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
            'ma_ten' => 'required|unique:monan|max:50',
            'ma_mota' => 'required',
            'ma_dongia' => 'required',
            'ma_hinhanh' => 'required|unique:monan',
        ];

    }

    public function messages()
    {
        return [
            'ma_ten.required' => 'Tên Món Ăn Không Được Bỏ Trống',
            'ma_ten.unique' => 'Món Ăn Này Đã Tồn Tại',
            'ma_hinhanh.unique' => 'Ảnh Món Ăn Này Đã Tồn Tại',
            'ma_mota.required' => 'Mô Tả Món Ăn Không Được Bỏ Trống',
            'ma_dongia.required' => 'Đơn Giá Món Ăn Không Được Bỏ Trống',
            'ma_hinhanh.required' => 'Hình Ảnh Món Ăn Không Được Bỏ Trống',
        ];
    }
}

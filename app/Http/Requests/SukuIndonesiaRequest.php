<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SukuIndonesiaRequest extends FormRequest
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
            'nama_suku' => 'required',
            'penjelasan' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'nama_suku.required' => 'Nama Suku tidak boleh kosong',
            'penjelasan.required' => 'Penjelasan tidak boleh kosong',
        ];
    }
    
}

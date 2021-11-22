<<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
class validbiodata extends FormRequest
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
            'Nama' => 'required|max:50|regex:/^[a-zA-ZÑñ\s]+$/',
            'Nim' => 'numeric',
            'Jenis-Kelamin' => 'required',
            'Tgl-Lahir' => 'required',
            'Alamat' => 'required|email:rfc,dns|regex:/(.+)@(.+)\.(.+)/i',
        ];
    }
    public function messages()
    {
       return [
        'Nama.text'=> 'Nama wajib diisi',
        'Nama.max'=> 'Nama maksimal 50 karakter',
        'Nama.regex' => 'harus format teks',
        'Nim.numeric'=> 'wajib dalam bentuk angka',
        'Jenis-Kelamin.required'=> 'jenis wajib diisi',
        'Tgl-Lahir.required'=> 'tanggal lahir wajib diisi',
        'Alamat.required'=> 'Alamat Email wajib diisi',
        'Alamat.email' => 'Email tidak terdaftar',
        'Alamat.regex' => 'salah formatnya',
       ];
    }
}
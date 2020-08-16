<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrasiRequest extends FormRequest
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
            'nama' => 'required|min:3',
            'jurusan' => 'required',
            'alamat' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required|max:13',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal 3 karakter',
            'jurusan.required' => 'Jurusan tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'alamat.min' => 'Alamat minimal 3 karakter',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
            'no_telepon.required' => 'No telpon tidak boleh kosong',
            'no_telepon.max' => 'No telpon tidak boleh melebihi 13 karakter',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email yang anda masukan sudah ada',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
        ];
    }
}

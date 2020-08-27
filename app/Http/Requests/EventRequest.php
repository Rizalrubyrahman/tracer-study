<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|min:3',
            'tempat' => 'required|min:3',
            'waktu' => 'required',
            'tanggal' => 'required',
            'description' => 'required:min:3',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'tempat.required' => 'Tempat tidak boleh kosong',
            'waktu.required' => 'Jam tidak boleh kosong',
            'description.required' => 'Deskripsi tidak boleh kosong',
            'title.min' => 'Judul minimal 3 karakter',
            'tempat.min' => 'Tempat minimal 3 karakter',
            'description.min' => 'Deskripsi minimal 3 karakter',
        ];
    }
}

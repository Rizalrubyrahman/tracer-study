<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PertanyaanRequest extends FormRequest
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
            'pertanyaan' => 'required|min:3',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
            'pertanyaan.min' => 'Pertanyaan minimal 3 karakter',
            'jawaban_a.required' => 'Jawaban A tidak boleh kosong',
            'jawaban_b.required' => 'Jawaban B tidak boleh kosong',
            'jawaban_c.required' => 'Jawaban C tidak boleh kosong',
            'jawaban_d.required' => 'Jawaban D tidak boleh kosong',
        ];
    }
}

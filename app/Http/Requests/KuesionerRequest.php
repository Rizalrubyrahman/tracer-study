<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KuesionerRequest extends FormRequest
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
            'jawaban1' => 'required',
            'jawaban2' => 'required',
            'jawaban3' => 'required',
            'jawaban4' => 'required',
            'jawaban5' => 'required',
        ];
       
    }
    public function messages()
    {
        return [
            'jawaban1.required' => 'No 1 belum di isi',
            'jawaban2.required' => 'No 2 belum di isi',
            'jawaban3.required' => 'No 3 belum di isi',
            'jawaban4.required' => 'No 4 belum di isi',
            'jawaban5.required' => 'No 5 belum di isi',
        ];
    }
}

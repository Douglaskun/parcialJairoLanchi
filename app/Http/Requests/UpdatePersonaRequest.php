<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonaRequest extends FormRequest
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
            //
            
            'dni' => ['required','max:8 ','unique:personas,dni,' . request()->route('persona')->id],
            'telefono' => "|string|max:255",
            'celular' => ['required','max:255 '],
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
           
        ];
    }
}

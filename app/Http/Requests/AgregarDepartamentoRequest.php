<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AgregarDepartamentoRequest extends Request
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
            'nom_dpto'=>'required|unique:departamento,nom_dpto',
            'ubicacion_dpto'=>'required|unique:departamento,ubicacion_dpto'
        ];
    }
}

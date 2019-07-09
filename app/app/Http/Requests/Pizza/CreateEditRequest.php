<?php

namespace App\Http\Requests\Pizza;

use Illuminate\Foundation\Http\FormRequest;

class CreateEditRequest extends FormRequest
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
            'tpizza_id' => 'required|exists:tpizzas,id',
            'size' => 'required',
            'price' => 'required'
        ];
    }
}

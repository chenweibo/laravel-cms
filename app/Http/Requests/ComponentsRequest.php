<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComponentsRequest extends FormRequest
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
        switch ($this->method()) {
            // CREATE
            case 'POST':

                return [
                    'title'  => 'required',
                    'notes'  => 'required',
                    'belong' => 'required',
                    'detail' => 'required',
                ];
            // UPDATE
            case 'PUT':
            case 'PATCH':

                return [
                    // UPDATE ROLES
                ];

            case 'GET':
            case 'DELETE':
            default:

                return [];
        }
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\City;
use Illuminate\Validation\Rule;

class PropertyRequest extends FormRequest
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
            'title'         => 'required|string|max:50|min:8',
            'type'          => 'required|string|max:50|min:4',
            'location' => [
                'required',
                Rule::notIn(['any']),
            ],
            'agreement' => [
                'required',
                Rule::notIn(['any']),
            ],
            'payment_duration' => [
                'required',
                Rule::notIn(['any']),
            ],
            'status' => [
                'required',
                Rule::notIn(['any']),
            ],
            'area'          => 'required|max:20',
            'price'         => 'required|max:20',
            'rooms'         => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'location.notIn' => 'A title is required',
        ];
    }
}
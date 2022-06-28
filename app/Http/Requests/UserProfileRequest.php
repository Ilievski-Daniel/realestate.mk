<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserProfileRequest extends FormRequest
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
        if(auth()->user()->phone_number == $_POST['phone_number']){
            $uniquePhoneNumber = '';
        } else {
            $uniquePhoneNumber = 'unique:users';
        }

        if(auth()->user()->email == $_POST['email']){
            $uniqueEmail = '';
        } else {
            $uniqueEmail = 'unique:users';
        }

        return [
            'name'                  => ['required', 'string', 'max:50', 'alpha'],
            'last_name'             => ['required', 'string', 'max:50', 'alpha'],
            'description'           => 'max:250',
            'phone_number'          => [Rule::phone()->country(['MK']), $uniquePhoneNumber],
            'email'                 => ['required', 'string', 'email', 'max:255', $uniqueEmail],
        ];
    }
}

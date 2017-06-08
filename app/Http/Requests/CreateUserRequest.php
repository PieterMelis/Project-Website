<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|max:50|email',
            

        ];
    }
    public function messages(){
         return [
        'name.required' => 'De naam mag niet leeg zijn!',
        'name.max'      => 'De naam mag niet langer zijn dan 50 tekens!',
        'email.required' => 'De email mag niet leeg zijn!',
        'email.max' => 'De email mag niet langer zijn dan 50 tekens!',
        'email.email' => 'De email moet een geldig email adress zijn!',
        
    ];

    }
}

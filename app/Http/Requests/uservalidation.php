<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uservalidation extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|max:190|email',
            

        ];
    }
    public function messages(){
         return [
        'name.required' => 'Het naam veld mag niet leeg zijn!',
        'name.max'      => 'Het naam veld mag niet meer dan 50 tekens bevatten!',
        'email.required' => 'Het email veld mag niet leeg zijn!',
        'email.max' => 'Het email veld mag niet meer dan 50 tekens bevatten!',
        'email.email' => 'Het email veld moet een geldig email adress bevatten!',
        
    ];

    }
}

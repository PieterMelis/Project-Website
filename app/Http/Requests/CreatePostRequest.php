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
            'title' => 'required|max:255',
            'excerpt' => 'required|max:190',
            'body' => 'required',
            'link1' => 'required|max:100000|mimes:jpeg,png,bmp,avi,mpeg,quicktime,mp4,mov',
            'link2' => 'max:100000|mimes:jpeg,png,bmp,avi,mpeg,quicktime,mp4,mov',

        ];
    }
    public function messages(){
         return [
        'title.required' => 'De titel mag niet leeg zijn!',
        'title.max'      => 'De titel mag niet langer zijn dan 255 tekens!',
        'excerpt.required' => 'De samenvatting mag niet leeg zijn!',
        'excerpt.max' => 'De samenvatting mag niet langer zijn dan 190 tekens!',
        'link1.required' => 'Het eerste bestand mag niet leeg zijn!',
        'link1.max' => 'Het eerste bestand mag niet groter zijn dan 100MB!',
        'link1.mimes' => 'Het eerste bestand is niet het juiste formaat!',
        'link2.max' => 'Het tweede bestand mag niet groter zijn dan 100MB!',
        'link2.mimes' => 'Het tweede bestand is niet het juiste formaat!',
        'body.required'  => 'De inhoud mag niet leeg zijn!',
    ];

    }
}

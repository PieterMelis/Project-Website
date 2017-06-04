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
}

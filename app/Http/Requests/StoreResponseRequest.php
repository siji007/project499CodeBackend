<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResponseRequest extends FormRequest
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
            'email' => ['email', 'required'],
            'age' => ['required'],
            'gender' => ['required'],
            'class' => ['required'],
            'location' => ['required'],
            'question1' => ['required'],
            'question2' => ['required'],
            'question3' => ['required'],
            'question4' => ['required'],
            'question5' => ['required'],
            'question6' => ['required'],
            'question7' => ['required'],
            'question8' => ['required'],
            'question9' => ['required'],
            'question10' => ['required'],
            'question11' => ['required'],
            'question12' => ['required'],
            'question13' => ['required'],
            'question14' => ['required'],
            'question15' => ['required'],
            'question16' => ['required'],
            'question17' => ['required'],
            'question18' => ['required'],
            'question19' => ['required'],
            'question20' => ['required'],
            'question21' => ['required'],
            'question22' => ['required'],
        ];
    }
}

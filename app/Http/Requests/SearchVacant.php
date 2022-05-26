<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchVacant extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category' => 'required',
            'location' => 'required',
        ];
    }
}

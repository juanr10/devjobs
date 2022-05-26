<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacant extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:8',
            'category' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'description' => 'required|min:50',
            'image' => 'required',
            'skills' => 'required'
        ];
    }
}

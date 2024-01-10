<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

            return  [
                'subject' => [
                    'min:3',
                    'max:200',
                    'required',

                    // "unique:supports,subject,{$this->id},id",

                    // unique:table,column,except,id ex:(exceto quando 8 for  o id)
                    Rule::unique('supports','subject')->ignore($this->id),
                ],

                'body' => [
                    'min:3',
                    'max:10000',
                    'required'
                ]
            ];
    }
}
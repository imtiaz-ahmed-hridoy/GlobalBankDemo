<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
        'Yourname' => 'string',

        'account_number' => 'string',

        'phone_no' => 'string',
        'password' => 'string',

        'akhama' => 'string',
        'balance' => 'string',
        'validation_code' => 'string',

        'user_img' => 'file|image|mimes:png,jpg',
      ];
    }

    public function messages()
    {
      return [
        'Yourname.string' => 'Yourname must be string',


        'account_number.string' => 'account_number must be string',

        'phone_no.string' => 'phone_no must be string',

        'password.string' => 'password must be string',

        'akhama.string' => 'akhama must be string',

        'balance.string' => 'balance must be string',

        'validation_code.string' => 'validation_code must be string',

        'user_img.file' => 'user_img must be type of file',
        'user_img.image' => 'user_img must be image',

        'user_img.mimes' => 'user_img must be jpg/png image',
      ];
    }
}
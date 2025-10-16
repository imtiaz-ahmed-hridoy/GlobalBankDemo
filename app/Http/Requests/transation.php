<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class transation extends FormRequest
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


          'receiver_account' => 'string|required',

          'bank' => 'string|required',

          'amount' => 'required|integer'
        ];
    }
    public function messages()
    {
      return [
      
        'receiver_account.string' => 'receiver_account must be string',
        'receiver_account.required' => 'receiver_account name is required',

        'bank.string' => 'bank must be string',
        'bank.required' => 'bank name is required',


        'amount.integer' => 'amount must be integer',
        'amount.required' => 'amount must be required'

      ];
    }
}
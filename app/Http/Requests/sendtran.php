<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sendtran extends FormRequest
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
      'transactionnum' => 'required|string|max:255',
    ];
  }

  public function messages()
  {
    return [
      'transactionnum.string' => 'Transaction number must be string',
      'transactionnum.required' => 'Transaction number is required',
      'transactionnum.max' => 'Transaction amount must be within 255 characters',
    ];
  }
}

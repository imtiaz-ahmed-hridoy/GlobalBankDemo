<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
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
      'Yourname' => 'string|required',

      'account_number' => 'string|required',

      'phone_no' => 'string|required',
      'email' => 'string|required',
      'tax_phone_no' => 'string',
      'password' => 'string|required',

      'akhama' => 'required|string',
      'currency' => 'string',
      'banknme' => 'string|required',
      'balance' => 'integer',
      'validation_code' => 'string',

      'user_img' => 'file|image|required|mimes:png,jpg',
    ];
  }

  public function messages()
  {
    return [
      'Yourname.string' => 'Yourname must be string',
      'Yourname.required' => 'Yourname name is required',

      'currency.string' => 'currency must be string',

      'banknme.string' => 'bank name must be string',
      'banknme.required' => 'bank name name is required',

      'account_number.string' => 'account_number must be string',
      'account_number.required' => 'account_number name is required',

      'phone_no.string' => 'phone_no must be string',
      'phone_no.required' => 'phone_no name is required',

      'email.string' => 'email must be string',
      'email.required' => 'email name is required',
      
         'tax_phone_no.string' => 'tax_phone_no must be string',
      
      'password.string' => 'password must be string',
      'password.required' => 'password must be required',

      'akhama.string' => 'akhama must be string',
      'akhama.required' => 'akhama must be required',

      'balance.integer' => 'balance must be integer',

      'validation_code.string' => 'validation_code must be string',

      'user_img.file' => 'user_img must be type of file',
      'user_img.image' => 'user_img must be image',

      'user_img.required' => 'You must choose a user_img',
      'user_img.mimes' => 'user_img must be jpg/png image',
    ];
  }
}

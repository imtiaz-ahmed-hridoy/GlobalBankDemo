<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class game_req extends FormRequest
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
      'gamnum' => 'string|required',

      'gamamount' => 'integer|required',
      'visually' => 'string|required',
    ];
  }

  public function messages()
  {
    return [
      'gamnum.string' => 'Game number must be string',
      'gamnum.required' => 'Game number is required',
      'gamamount.integer' => 'Game amount must be integer',
      'gamamount.required' => 'Game amount name is required',
      'visually.string' => 'visually must be string',
      'visually.required' => 'visually is required',
    ];
  }
}

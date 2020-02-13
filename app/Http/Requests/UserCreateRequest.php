<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{

    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
            'firstName' => 'required|max:250',
            'lastName' => 'required|max:250',
            'age' => 'required|max:3',
            'phone' => 'required|max:20',
            'address' => 'required|max:250',
            'zipCode' => 'required|max:5',
            'city' => 'required|max:250',
            'login' => 'required|max:250|unique:users',
            'password' => 'required|max:250|min:6',
            'mail' => 'required|email|max:250|unique:users',
            'googleId' => 'email|max:50|unique:users',
		];
	}
}

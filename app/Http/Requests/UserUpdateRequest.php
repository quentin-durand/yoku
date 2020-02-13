<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$id = $this->user;
			return [
            'firstName' => 'required|max:250'.$id,
            'lastName' => 'required|max:250'.$id,
            'age' => 'required|max:3'.$id,
            'phone' => 'required|max:20'.$id,
            'address' => 'required|max:250'.$id,
            'zipCode' => 'required|max:5'.$id,
            'city' => 'required|max:250'.$id,
            'login' => 'required|max:250|unique:users'.$id,
            'password' => 'required|max:250|min:6'.$id,
            'mail' => 'required|email|max:250|unique:users'.$id,
            'googleId' => 'email|max:50|unique:users'.$id,
		];
	}
}

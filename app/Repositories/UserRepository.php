<?php

namespace App\Repositories;

use App\UUser;

class UserRepository
{

    protected $user;

    public function __construct(UUser $user)
	{
		$this->user = $user;
	}

	private function save(UUser $user, Array $inputs)
	{
		$user->U_LastName = $inputs['lastName'];
        $user->U_FirstName = $inputs['firstName'];
        $user->U_Age = $inputs['age'];
        $user->U_Address = $inputs['address'];
        $user->U_ZipCode = $inputs['zipCode'];
        $user->U_City = $inputs['city'];
        $user->U_Phone = $inputs['phone'];
        $user->U_Mail = $inputs['mail'];
        $user->U_GoogleId = $inputs['googleId'];
        $user->U_Login = $inputs['login'];
        $user->U_Password = $inputs['password'];



		$user->save();
	}

	public function getPaginate($n)
	{
		return $this->user->paginate($n);
	}

	public function store(Array $inputs)
	{
		$user = new $this->user;
		$user->password = bcrypt($inputs['password']);

		$this->save($user, $inputs);

		return $user;
	}

	public function getById($id)
	{
		return $this->user->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}

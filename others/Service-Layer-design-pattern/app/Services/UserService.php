<?php
namespace App\Services;

use App\Models\User;

class UserService
{
	public function getAll(){
		return User::all();
	}

	public function getUser($id){
		return User::find($id);
	}
}

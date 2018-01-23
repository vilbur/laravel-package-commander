<?php

namespace Vilbur\Commander\Test;

use App\User;

class CreateUserCommand
{
	public $user;

	public function __construct(User $user)
	{
		$this->user	= $user;
	}
}
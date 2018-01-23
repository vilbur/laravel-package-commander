<?php

namespace Vilbur\Commander\Test;
use Vilbur\Commander\CommandHandler;

class CreateUserCommandHandler implements CommandHandler
{

	protected $user;

	public function __construct(\App\User $user)
	{
		$this->user	= $user;
	}
	/**
	*/
	public function handle($command)
	{
		$command->user->save();
	}
}
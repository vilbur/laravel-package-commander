<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Generator as Faker;

use Vilbur\Commander\CommandBus;
use Vilbur\Commander\CommandTranslator;
use Vilbur\Commander\Test\CreateUserCommand;


class CommanderTest extends TestCase
{
	use RefreshDatabase;

	public function setUp()
	{
		$this->commandBus	= new CommandBus( new CommandTranslator );
	}
   /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_user_command(){

		parent::setUp();

		$user = factory(\App\User::class, 1)->make()->first();

		$command	= new CreateUserCommand($user);

		$this->commandBus->execute($command);

		$this->assertEquals(\App\User::all()->last()->name, $user->name );
    }
}

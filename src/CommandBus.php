<?php

namespace Vilbur\Commander;

use Vilbur\Commander\CommandTranslator;

class CommandBus
{
	protected $commandTranslator;

	public function __construct(CommandTranslator $commandTranslator )
	{
		$this->commandTranslator	= $commandTranslator;
	}

	/**
	*/
	public function execute($command)
	{
		$handler	= $this->commandTranslator->toCommandHandler($command);

		return \App::make($handler)->handle($command);
	}
}

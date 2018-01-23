<?php

namespace Vilbur\Commander;

class CommandTranslator
{
	/**
	*/
	public function toCommandHandler($command)
	{
		$handler = preg_replace('/Command$/', 'CommandHandler', get_class($command));

		if( ! class_exists($handler))
		{
			$message = "Command handler [$handler] does not exists.";

			throw new \Exception($message);
		}
		
		return $handler;
	}
}
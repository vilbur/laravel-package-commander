<?php
namespace Vilbur\Commander\Events;

use Illuminate\Events\Dispatcher;

class EventDispatcher
{


	protected $event;

	public function __construct(Dispatcher $event)
	{
		$this->event	= $event;

	}

	public function dispatch(array $events)
	{
		foreach($events as $event)
			$this->event->fire($this->getEventName($event), $event);
	}
	/**
	*/
	function getEventName($event)
	{
		return str_replace('\\', '.', get_class($event) );
	}


}
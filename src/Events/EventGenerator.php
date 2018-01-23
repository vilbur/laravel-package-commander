<?php
namespace Vilbur\CommanderEvents;

trait EventGenerator
{
	protected $pendingEvents = [];
	/**
	*/
	public function raise($events)
	{
		$this->pendingEvents	= $events;

	}
	/**
	*/
	public function releaseEvents()
	{
		$events = $this->pendingEvents;

		$this->pendingEvents = [];

		return $events;

	}
}
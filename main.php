<?php

class Main
{
	private $rooms;
	private $displays;
	private $org;
	private $group;
	public function __construct($rooms, $displays, $org){
		$this->rooms = $rooms;
		$this->displays = $displays;
		$this->org = $org;
	}
}
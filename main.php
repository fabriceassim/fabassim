<?php

class Main
{
	private $rooms;
	private $displays;
	private $org;
	private $group;
	
	public function __construct($rooms, $displays, $org,$group){
		$this->rooms = $rooms;
		$this->displays = $displays;
		$this->org = $org;
		$this->group = $group;
	}
}
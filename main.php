<?php

class Main
{
	private $rooms;
	private $displays;
	private $org;
	public function __construct($rooms, $displays, $org){
		$this->rooms = $rooms;
		$this->displays = $displays;
		$this->org = $org;
	}
}
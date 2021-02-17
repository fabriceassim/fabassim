<?php

class Main
{
	private $rooms;
	private $displays;
	private $org;
	private $group;
	private $moi;
	private $toi;
	public function __construct($rooms, $displays, $org,$group,$moi, $toi){
		$this->rooms = $rooms;
		$this->displays = $displays;
		$this->org = $org;
		$this->group = $group;
		$this->moi = $moi;
		$this->toi = $toi;
	}
}
<?php

class Main
{
	private $rooms;
	private $displays;
	private $org;
	private $group;
	private $moi;
	private $toi;
	private $femme;
	private $homme;
	public function __construct($rooms, $displays, $org,$group,$moi, $toi, $femme, $homme){
		$this->rooms = $rooms;
		$this->displays = $displays;
		$this->org = $org;
		$this->group = $group;
		$this->moi = $moi;
		$this->toi = $toi;
		$this->femme = $femme;
		$this->homme = $homme;
	}

	public function setFemme($femme)
	{
		$this->femme = $femme;
	}
	public function getFemme()
	{
		return $this->femme;
	}
	public function setToi($toi)
	{
		$this->toi = $toi;
	}

	public function getToi()
	{
		return $this->toi = $moi;
	}

	public function run()
	{
		return 'main_class';
	}

	public function ok()
	{
		return 'ok';
	}

	public function next()
	{
		return next();
	}

	public function last(){
		return 'last_';
	}
}
<?php

class Femme
{
	private $femme;
	public function __construct($femme){
		$this->femme = $femme;
	}
	public function init(){
		return 'femme';
	}

	public function set($femme){
		$this->femme = $femme;
	}

	public function catch(){
		return 'catch and not catch';
	}
}
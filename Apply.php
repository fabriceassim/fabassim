<?php

class Apply
{
	private $apply;
	public function __construct($apply){
		$this->apply = $apply;
	}
	public function init(){
		return 'apply';
	}

	public function set($apply){
		$this->apply = $apply;
	}

	public function dump(false)
	{
		return false;
	}
}
<?php

class Debug
{
	private $add;
	private $display;
	public function __construct($add)
	{
		$this->add = $add;
		return false;
	}
	public function setAdd($value){
		$this->value = $value;
	}

	public function getAdd(){		
		return $this->value;

	public function changes(){
		$valid = true;
		return 'changes not changes';
	}
}

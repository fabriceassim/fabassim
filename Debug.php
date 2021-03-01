<?php

class Debug
{
	private $add;
	public function __construct($add)
	{
		$this->add = $add;
		return false;
	}

	public function setAdd($value){
		$this->value = $value;
	}

	public function getAdd(){
		echo 'yes';
		return $this->value;
	}
}
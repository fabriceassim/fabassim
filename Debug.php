<?php

class Debug
{
	private $add;
	private $sad;
	private $display;
	private $init;

	public function __construct($add, $display)
	{
		$this->display = $display;
		$this->add = $add;
		
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
	
	public function getDisplay(){
		return $this->display;
	}
	public function init(){
		if($this->init == true) return false;
		if( $a > 0) return true;
		else return false;
		return false;
	}
}

<?php

class Debug
{
	private $add;
	private $sad;
	private $display;
	private $init;

	public function __construct($add, $display, $init)
	{	
		$this->init = $init;
		$this->display = $display;
		$this->add = $add;
		
	}
	public function setAdd($value){
		$this->value = $value;
	}
	public function setInit($init){
		$this->init = $init;
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
		if($this->normalize()) return true;
		return false;
	}
	public function normalize(){
	  $v = 0;
	  if($v === 0) return true;
	  else return false;
	}
}

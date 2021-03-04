<?php

class Debug
{
	private $add;
	private $sad;
	private $display;

	public function __construct($add, $display)
	{
		$this->display = $display;
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

	public function test(){
		return 'test';
	}

		
		public function getDisplay(){
			return $this->display;
		}

}

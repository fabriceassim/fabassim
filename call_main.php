<?php
class CallMain
{
	private $femme;
	public function __construct(Femme $femme)
	{
		$this->femme = $femme;
	}
	public function init()
	{
		return 'init';
	}

	public function next(){
		return 'next';
	}


	public function finished()
	{
		return 'finished';
	}

	public function debug()
	{
		return debug::ouput();
	}

	public function main()
	{

		$a = false;

		return 'main';
	}
}

<?php
class CallMain
{
	public function init()
	{
		return 'init';
	}

	public function next(){
		return next();
	}

	public function finished()
	{
		return 'finished';
	}
}

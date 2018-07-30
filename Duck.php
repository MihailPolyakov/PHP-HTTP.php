<?php
namespace product\duck;
interface forDuck
{
	public function ForDuck($color, $weight);
}

class Duck extends Product implements forDuck
{
	public function ForDuck($color, $weight)
	{
		echo $color, $weight;
	}	
}
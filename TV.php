<?php
namespace product;
interface forTV
{
	public function ForTv($price, $diagonal);
}

interface CarAndProduct
{
	public function ForCarAndProduct($price);
}

class Tv extends Product implements forTV
{
	
	function __construct($name)
	{
		$this->name=$name;
	}

	public function ForTv($price, $diagonal)
	{
		echo $price, $diagonal;
	}
}

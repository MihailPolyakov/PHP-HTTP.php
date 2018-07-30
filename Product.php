<?php
namespace Product;

interface CarAndProduct
{
	public function ForCarAndProduct($price);
}

abstract class Product
{
	public $currency;
	
	function __construct($name, $currency)
	{
		$this->name=$name;
		$this->currency=$currency;
	}

	public function  ForCarAndProduct($price)
		{
			if ($this->currency=='$') {
				echo $this->$price*63;
			} else {
				echo $price;
			}
			
		}
}

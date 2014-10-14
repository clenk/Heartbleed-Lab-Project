<?php
	/**
	* Models an item the user can buy.
	*/
	class Product
	{
		var $name = "";
		var $price = 0.0;

		public function __construct($itemname, $itemprice)
		{
			$this->name = $itemname;
			$this->price = $itemprice;
		}
	}

	$products = array( new product("Apple", 1.45),
					   new product("Banana", 1.68),
					   new product("Orange", 1.39),
					   new product("Pear", 1.25),
					   new product("Pineapple", 5.99),
					   new product("Lemon", 2.46),
					   new product("Strawberries", 2.35),
					   new product("Raspberries", 2.75),
					   new product("Blueberries", 4.35),
					   new product("Blackberries", 4.05),
					   new product("Lime", 1.99),
					   new product("Fig", 2.19),
					   new product("Pepper", 0.99),
					   new product("Tomato", 1.45),
					   new product("Eggplant", 1.97) );
?>
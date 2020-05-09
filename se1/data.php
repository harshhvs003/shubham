<?php

function get_age($name)
{
	$products = [
		"Sarath"=>23,
		"Faf"=>20,
		"Watson"=>15		
	];
	
	foreach($products as $product=>$age)
	{
		if($product==$name)
		{
			return $age;
			break;
		}
	}
}

?>

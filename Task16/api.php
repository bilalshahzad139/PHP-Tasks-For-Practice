<?php
		//Get value from REQUEST
		$country_id = $_REQUEST["CID"];		
		$cities = array();
		
		if($country_id == 1)
		{			
			$cities[0] = array("CityID" => 1, "Name" => "Lahore");
			$cities[1] = array("CityID" => 2, "Name" => "Karachi");
			$cities[2] = array("CityID" => 3, "Name" => "Quetta");
		}
		else if($country_id == 2)
		{			
			$cities[0] = array("CityID" => 1, "Name" => "Delhi");
			$cities[1] = array("CityID" => 2, "Name" => "Bombay");
		}
		else if($country_id == 3)
		{			
			$cities[0] = array("CityID" => 1, "Name" => "City1");
			$cities[1] = array("CityID" => 2, "Name" => "City2");
			
		}
		//Create an object with attribute 'Cities'
		$output["Cities"] = $cities;
		
		//Return above object in JSON format
		echo json_encode($output);
  
?>
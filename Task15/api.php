<?php
		//Get value from REQUEST
		$marks = $_REQUEST["Marks"];		
		$gpa = 0;
		if($marks >= 85)
			$gpa = 4.0;
		else if($marks >= 80)
			$gpa = 3.5;
		else if($marks >= 75)
			$gpa = 3.0;
		else if($marks >= 70)
			$gpa = 2.5;
		else if($marks >= 60)
			$gpa = 2.0;
		else 
			$gpa = 0.0;
		
		//Create an object with cgpa
		$output["GPA"] = $gpa;
		
		//Return above object in JSON format
		echo json_encode($output);
  
?>
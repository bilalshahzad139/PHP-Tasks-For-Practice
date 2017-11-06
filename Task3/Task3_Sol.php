<?php
	//Objective: Creating an associative array & accessing its values
	
		//Step1: Create associative array with two properties (id, Name)
		$data = array("id"=>1,"Name"=>"Bilal");
?>
<html>
<head>
<title>Task3_Sol</title>
</head>
<body>
	
    <?php
		//Step 2: print id & Name of $data 
		echo "Id is".$data['id'];
		echo "<br>";
		echo "Name is".$data['Name'];					
    ?>


</body>
</html>
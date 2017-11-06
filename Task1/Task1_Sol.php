<?php
	//Objective: Creating an array and printing its values
		
		//Step 1: Create an array of 5 strings (Cities)
		$data = array("Lahore","Karachi","Queta","Islamabad","Pesahwar");
?>
<html>
<head>
<title>Task1_Sol</title>
</head>
<body>

    <?php
		//Step 2: Print values of above array
		 for($a=0;$a<count($data);$a++)
		 {
			 echo "Value is: ". $data[$a]. "<br>";			 
		 }	
					
    ?>
    

</body>
</html>
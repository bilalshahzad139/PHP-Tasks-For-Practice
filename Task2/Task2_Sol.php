<?php
	//Objective: Creating dropdown options dynamically
	
		//Array of Cities
		$data = array("Lahore","Karachi","Queta","Islamabad","Pesahwar");
?>
<html>
<head>
<title>Task2_Sol</title>
</head>
<body>

	<select>
    <?php
		//Step 1: Print cities in a dropdown (as options)
		for($a=0;$a<count($data);$a++)
		 {
			 echo "<option>". $data[$a]."</option>";			 
		 }
					
    ?>
    </select>

</body>
</html>

<?php require('conn.php'); ?>
 
<?php 
		/*
		Objective: Get & Show Countries in a drop down
		*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Task19</title>
</head>
<body>
	Country: <select name="country" id="country">
	<option value="0">--Select--</option>				
	<?php 
	
	//Step-1: Query to select Countries
	$sql = ;
	
	//Step-2: Query execution
	$result = ;
	
	//Step-3: Get count of records
	$recordsFound = 			
	
	if ($recordsFound > 0) {
		//Step-4: Iterate row by row
		while() {
		
			
			$id = $row["id"];
			$name = $row["name"];
			//Step-5: Generate Options using data
			
		}
	}				
	?>
  </select><br>
</body>
</html>
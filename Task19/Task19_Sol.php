
 <?php require('conn.php'); ?>
 
<?php 
		/*
		Objective: Get & Show Countries in a drop down
		*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Task19_Sol</title>
</head>
<body>
	Country: <select name="country" id="country">
	<option value="0">--Select--</option>				
	<?php 
	
	//Step-1: Query to select Countries
	$sql = "SELECT id,name FROM country";
	
	//Step-2: Query execution
	$result = mysqli_query($conn, $sql);
	
	//Step-3: Get count of records
	$recordsFound = mysqli_num_rows($result);			
	
	if ($recordsFound > 0) {
		//Step-4: Iterate row by row
		while($row = mysqli_fetch_assoc($result)) {
		
			
			$id = $row["id"];
			$name = $row["name"];
			//Step-5: Generate Options using data
			echo "<option value='$id'>$name</option>";
		}
	}				
	?>
  </select><br>
</body>
</html>

 <?php require('conn.php'); ?>
 <?php require('utility.php'); ?>
 
<?php 
		/*
		Objective: Save Data in Database. This is continution of Task 19
		*/
		$msg = "";
		if(isset($_REQUEST["btnSave"])){
	
			$name = $_REQUEST["txtCity"];
			$country = $_REQUEST["country"];
			
			$sql = "INSERT INTO city (name, countryid)
				VALUES ('$name', '$country')";
			
			if (mysqli_query($conn, $sql) === TRUE) {
				$last_id = mysqli_insert_id($conn);
				$msg = "Record is added successfully.";
			} else {
				//$msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
				$msg = "Some Problem has occurred";
			}	
		}
?>

<!DOCTYPE html>
<html>
<head>
<title>Task20_Sol</title>
</head>
<body>
<span style='background-color:red'><?php echo $msg ?></span>
<form action="" method="POST">
	City Name:<input type="text" name="txtCity" /> <br>
	
	Country: <select name="country" id="country">
	<option value="0">--Select--</option>				
	<?php 		
		
		GetCountries($conn);		
		
	?>
  </select><br>
  
  <input type="submit" value="Save" name="btnSave" />
 
</form>


</body>
</html>
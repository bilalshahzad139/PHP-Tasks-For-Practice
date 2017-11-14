

	 <?php
		function GetCountries($conn)
		{			
			$sql = "SELECT id,name FROM country";
					
			$result = mysqli_query($conn, $sql);
			$recordsFound = mysqli_num_rows($result);			
			
			if ($recordsFound > 0) {
				echo $recordsFound;
				while($row = mysqli_fetch_assoc($result)) {
				
					$id = $row["id"];
					$name = $row["name"];
					
					echo "<option value='$id'>$name</option>";
				}
			}	
		}
		
	?>


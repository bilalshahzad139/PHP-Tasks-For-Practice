
 <?php require('conn.php'); ?>
 
<?php 

		/*
		Objective: Reading Data (countries) from Database & Displaying it
		*/
			
		//Step-1: Write SQL query
		$sql = "SELECT id,name FROM country";
		
		//Step-2: Execute SQL Query
		$result = mysqli_query($conn, $sql);
		
		//Step-3: Get count of result
		$recordsFound = mysqli_num_rows($result);			
		if ($recordsFound > 0) {
			
			//Step-4: Iterate row by row 
			while($row = mysqli_fetch_assoc($result)) {
			
				$id = $row["id"];
				$name = $row["name"];
				
				//Step-5: Display values
				echo "ID: $id, Name:$name";
			}
		}
?>		
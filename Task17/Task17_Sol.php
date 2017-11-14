 
 <?php
		/*
		Objective: Testing connection with a MySQL DB 
		*/
		
		//Step-1: Create a database 'test' in MySQL
		//Step-2: Update detail below if differnt
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";
		
?>
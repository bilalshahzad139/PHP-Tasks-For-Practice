<?php
	//This funciton should be called before using session in the file
	session_start(); // Starting Session
	
	/*
	Objective: Check if value of session variable persists on page refresh
	*/

	//Step-1: Check if session has an element of key 'counter
	if()
	{
		//Step-2: Increment value of counter
		
	}
	else {
		//Step-3: Set 1 to counter in session;
		
	}
	
	
?>
<html>
<head>
<title>Task10</title>
	
</head>
<body >
	
	<!--print value of counter -->
	<?php
		echo $_SESSION['counter'];
	?>

</body>
</html>
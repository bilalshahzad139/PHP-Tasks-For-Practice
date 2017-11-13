<?php
	//This funciton should be called before using session in the file
	session_start(); // Starting Session
	
	/*
	Objective: Check if value of session variable persists on page refresh
	*/

	//Step-1: Check if session has an element of key 'counter
	if(isset($_SESSION['counter']) == true)
	{
		//Step-2: Increment value of counter
		$_SESSION['counter'] = (int)$_SESSION['counter'] + 1;
	}
	else {
		//Step-3: Set 1 to counter in session;
		$_SESSION['counter'] = 1;
	}
	
	
?>
<html>
<head>
<title>Task10_Sol</title>
	
</head>
<body >
	
	<!--Step:4 print value of counter -->
	<?php
		echo $_SESSION['counter'];
	?>

</body>
</html>
<?php
	
	/*
	Objective: Understanding of Cookies
	Cookie should be expired after 2 days
	https://www.w3schools.com/php/php_cookies.asp
	*/

	//Step-1: Check if a cookie with name 'counter' exists
	if(isset($_COOKIE['counter']) == true)
	{
		//Step-2: Get & Increment value of counter
		$v = (int)$_COOKIE['counter'] + 1;
		
		//Step-3: Set incremented value in cookie
		//setcookie(name, value, expire, path, domain, secure, httponly);
		setcookie("counter",$v, time() + (86400 * 2),"/");
	}
	else {
		//Step-4: Set 1 to counter in cookie;
		setcookie("counter","1", time() + (86400 * 2),"/");
	}
	
	
?>
<html>
<head>
<title>Task11_Sol</title>
	
</head>
<body >
	
	<!--Step:5 print value of counter -->
	<?php
		if(isset($_COOKIE['counter']) == true)
		{
		echo $_COOKIE['counter'];
		}
	?>

</body>
</html>
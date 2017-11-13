<html>
<head>
<title>Task13_Sol</title>

<script>
	//localStorage & sessionStorage are available on client side
	//These are independent of PHP
	
	/*-----Objective: Learning of sessionStorage -----------*/
	
	//Step-1: Check if 'counter' exists in sessionStorage
	if(sessionStorage['counter']){
		//Step-2: Increment value of counter and Set back
		sessionStorage['counter'] = parseInt(sessionStorage['counter']) + 1;		
	}
	else {		
		//Step-3: Set 1 to counter in sessionStorage;
		sessionStorage['counter'] = 1;
	}
	//Step:4 show value of counter in alert
	alert(sessionStorage['counter']);
</script>
	
</head>
<body >
	
	

</body>
</html>
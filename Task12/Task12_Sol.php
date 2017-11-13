<html>
<head>
<title>Task12_Sol</title>

<script>
	//localStorage & sessionStorage are available on client side
	//These are independent of PHP
	
	/*-----Objective: Learning of localStorage -----------*/
	
	//Step-1: Check if 'counter' exists in localStorage
	if(localStorage['counter']){
		//Step-2: Increment value of counter and Set back
		localStorage['counter'] = parseInt(localStorage['counter']) + 1;		
	}
	else {		
		//Step-3: Set 1 to counter in localStorage;
		localStorage['counter'] = 1;
	}
	//Step:4 show value of counter in alert
	alert(localStorage['counter']);
</script>
	
</head>
<body >
	
	

</body>
</html>
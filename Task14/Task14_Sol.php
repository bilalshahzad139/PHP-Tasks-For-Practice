
<html>
<head>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("#btnShow").click(function(){
		
			//Step-1: Create an Object with one attribute "Name"
			var dataToSend = {"Name":"Bilal"};
			
			//Step-2: Create an Object to make AJAX call
			var settings= {
				type: "POST",
				dataType: "json",
				url: "api.php",
				data: dataToSend,
				success: function(result){
					alert(result);				
				}
			};
			
			//Step-3: Make AJAX call
			$.ajax(settings);
			console.log('request sent');
			return false;			
		});//end of show all
		
		
	});//end of ready
</script>
</head>
<body>

<h1> Simple AJAX Example 1 </h1>
   
   <input type="submit" id="btnShow" value="Show" />
   
</body>
</html>

<html>
<head>
<title>Task15</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("#btnGGPA").click(function(){
		
			//Step-1: Create an Object with to send marks
			var marks = $("#txtMarks").val();
			var dataToSend = ;
			
			//Step-2: Create an Object to make AJAX call
			var settings= {
				
			};
			
			//Step-3: Make AJAX call
			
			return false;			
		});//end 
		
		
	});//end of ready
</script>
</head>
<body>

<h1> Simple AJAX GPA Caluclator </h1>
   Marks:<input type="text" id="txtMarks">
   <input type="submit" id="btnGGPA" value="Compute" /><br>
   <span id="spResult"></span>
   
</body>
</html>
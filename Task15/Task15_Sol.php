
<html>
<head>
<title>Task15_Sol</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("#btnGGPA").click(function(){
		
			//Step-1: Create an Object to send marks
			var marks = $("#txtMarks").val();
			var dataToSend = {"Marks":marks};
			
			//Step-2: Create an Object to make AJAX call
			var settings= {
				type: "POST",
				dataType: "json",
				url: "api.php",
				data: dataToSend,
				success: function(result){
					$("#spResult").text(result.GPA);			
				}
			};
			
			//Step-3: Make AJAX call
			$.ajax(settings);
			console.log('request sent');
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
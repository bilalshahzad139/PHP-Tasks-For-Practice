
<html>
<head>
<title>Task16</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("#cmbCountry").change(function(){
		
			
			var countryId = $("#cmbCountry").val();
			//Step-1: Create an Object to send country with attribute 'CID'
			var dataToSend = ;
			
			//Create an Object to make AJAX call
			var settings= {
				type: "POST",
				dataType: "json",
				url: "api.php",
				data: dataToSend,
				success: function(result){
					//result.Cities contains cities
					$("#cmbCity").empty();
					for(var i=0;i<result.Cities.length;i++)
					{
						//Step-2: Create Option and append in cmbCity						
					}
				}
			};
			
			//Make AJAX call
			$.ajax(settings);
			console.log('request sent');
			return false;			
		});//end 
		
		
	});//end of ready
</script>
</head>
<body>

<h1> AJAX example, Load Cities for a country </h1>
   <select id="cmbCountry">
		<option value="1">Pakistan</option>
		<option value="2">India</option>
		<option value="3">Sri Lanka</option>
   </select>
   <select id="cmbCity"></select>
   
   
</body>
</html>
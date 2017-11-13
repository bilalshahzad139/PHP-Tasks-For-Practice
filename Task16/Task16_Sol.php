
<html>
<head>
<title>Task16_Sol</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
	$(document).ready(function(){
		
		$("#cmbCountry").change(function(){
		
			//Step-1: Create an Object to send country
			var countryId = $("#cmbCountry").val();
			var dataToSend = {"CID":countryId};
			
			//Step-2: Create an Object to make AJAX call
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
						var city = result.Cities[i];
						var opt = $("<option value="+ city.CityID +">"+city.Name+"</option>");
						$("#cmbCity").append(opt);						
					}
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

<h1> AJAX example, Load Cities for a country </h1>
   <select id="cmbCountry">
		<option value="1">Pakistan</option>
		<option value="2">India</option>
		<option value="3">Sri Lanka</option>
   </select>
   <select id="cmbCity"></select>
   
   
</body>
</html>
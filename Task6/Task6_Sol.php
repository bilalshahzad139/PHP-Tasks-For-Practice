<?php
	//Objective: Adding two Numbers
	
	$sum = 0;
	//Step 1: Check if Button is pressed to submit form	
	if(isset($_POST["btnAdd"]) == true)
	{
	//Step 2: Get values of both textboxes
		$num1= $_REQUEST["txtFirstNumber"];
		$num2= $_REQUEST["txtSecondNumber"];
		
	//Step 3: Add both numbers and display result in result text box
		$sum = $num1 + $num2;		
	}
?>
<html>
<head>
<title>Task6_Sol</title>
</head>
<body>
	
	<form action="" method="POST">
		First:<input type="text" name="txtFirstNumber" /> <br>
		Second:<input type="text" name="txtSecondNumber" /><br>
		<input type="submit" value="OK" name="btnAdd" /> <br>
		Result:<input type="text" name="txtResult" value="<?php echo $sum ?>"/>
	</form>


</body>
</html>
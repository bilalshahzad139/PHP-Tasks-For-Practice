<?php
	//Objective: Sending Data Back to Server
	
	//Step 1: Check if Button is pressed to submit form	
	if(isset($_POST["btnOK"]) == true)
	{
	//Step 2: Get value of textbox submitted
		$v = $_POST["txtName"];
		
	//Step 3: Display the value
		echo "Value Entered is:".$v;
	}
?>
<html>
<head>
<title>Task5_Sol</title>
</head>
<body>
	
	<form action="" method="POST">
		<input type="text" name="txtName" />
		<input type="submit" value="OK" name="btnOK" />		
	</form>
	
    </tbody>
	</table>

</body>
</html>
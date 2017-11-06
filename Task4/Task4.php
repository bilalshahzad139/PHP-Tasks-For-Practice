<?php
	//Objective: Multidimensional Array (Array of associative arrays)
	
		//Array of arrays (associative arrays)
		$students = array(array("id"=>1,"Name"=>"Bilal1"),
						  array("id"=>2,"Name"=>"Bilal2"),
						  array("id"=>3,"Name"=>"Bilal3"),
						  array("id"=>4,"Name"=>"Bilal4")
						  );
?>
<html>
<head>
<title>Task4</title>
<style>
	tr {
		background-color:grey;
		
	}
</style>
</head>
<body>
	<table style="width:100%">
	<thead>
		<tr>
		<td>ID</td>
		<td>Name</td>
		</tr>
	</thead>
	<tbody>
	
    <?php		
		//Step 1: print students data in tabular format (e.g. <tr><td>1</td><td>Bilal</td></tr>)
		for($a=0;$a<count($students);$a++)
		{
			

			
		}
    ?>
    </tbody>
	</table>

</body>
</html>
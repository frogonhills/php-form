<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM registertable2 ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>


	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['division']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">update</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>

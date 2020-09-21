<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$division = mysqli_real_escape_string($mysqli, $_POST['division']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	
	if(empty($username) || empty($division) || empty($email)) {	
			
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($division)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		
		$result = mysqli_query($mysqli, "UPDATE registertable2 SET username='$username',division='$division',email='$email' WHERE id=$id");
		
		
		header("Location: show.php");
	}
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM registertable2 WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$division = $res['division'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="show.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>division</td>
				<td><input type="text" name="division" value="<?php echo $division;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

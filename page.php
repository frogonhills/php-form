<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="container">
<div class="col-lg-12">

<br><br><h1 class="text-center text-primary">Display Table</h1>
<!-- search option -->
<div class="">
<nav class="navbar navbar-light bg-light">
<form  action="result.php" class="form-inline" method="POST">

<center><table>
<tr>
	
	<td> <span class="text"> Search </span> <input type="text" name="username" > </td>
	<td><input class="form-control"  type="submit" name="submit"></td>

</tr>
</table></center>
</form>

</nav>
</div>



<br><table  class="table table-striped table-hover text-center  ">
<tr class="text-white bg-dark">


				<th>Id</th>

				<th>Username</th>

				<th>Email Id</th>

				<th>Division</th>

				<th>District</th>

				<th>Upozila</th>

				<th>Delete</th>
				
				<th>Update</th>

			</tr> 

			<?php

			include 'dbcon.php';
			include 'sql.php';
             
             $query="select * from registertable2";

             $result=mysqli_query($connect,$query);
             while ($test=mysqli_fetch_array($result)){


			?>

			<tr>
				<td><?php echo $test['id']; ?></td>
				<td><?php echo $test['username']; ?></td>
				<td><?php echo $test['email']; ?></td>
				<td><?php echo $test['division']; ?></td>
				<td><?php echo $test['district']; ?></td>
				<td><?php echo $test['upozila']; ?></td>

				<td><button class="btn-danger btn">
					<a href="delete.php?id=<?php echo $test['id']; ?>" class="text-white">Delete</a>
					<td><button class="btn-primary btn">
						<a href="update.php?id=<?php echo $test['id']; ?>" class="text-white">Update</a>
				</button></td>
				<td></td>
				<td></td>



			</tr>

			<?php


		}

		?>



				</table>
			
		</div>
		

	</div>

</body>
</html>

</body>
</html>





<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/style.css">
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
		body{
			background-image: url(./einstein.jpeg);
			background-repeat:no-repeat;
			background-size:cover;
		}

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}

	#box{
        
		display:flex;

		justify-content:center;
		background-color: transparent;
		background-size:cover;
		justify-content:center;
		align-items:center;

		
		height:100vh;
		width:100vw;
	

	}
	a{
		text-decoration:none;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php " style="color:white " >Click to Login</a><br><br>
		</form>
	</div>





</body>
</html>
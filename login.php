<!DOCTYPE html>
<html>
<head>
	<title>Log in </title>
</head>
<body>
	<form id="login-form" method="post" >

		<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>

    <button type="submit" class="btn" name="login">Login</button>
    
    </form>


    <?php

    $servername="localhost";
	$username = "root";
	$password = "";
	$dbname="travel_guide";

	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error){
		die ("connection failed: ".$conn_error);
	}

	if(isset($_POST['login']))
	{
		$Username = $_POST["username"];
		$Password = $_POST["password"];


		$data = "SELECT Username,Password FROM User where Username = '$Username' AND Password = '$Password'";


    	$result = $conn->query($data);

		if(($result -> num_rows > 0))
		{
			echo "<script> window.location.assign('project.html'); </script>";
	
	
	
		}
		else
		{
			echo "not a user";
		}
	}

    ?>

    <script type="text/javascript">
    	
    	function openHome()
    	{
    		window.open(project/project.html);
    	}
    </script>


</body>
</html>
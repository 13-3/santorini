<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>

<form id="signup-form" method=post name="signup-form" >



	<label for="email"><b>Email</b></label>
    <input type="email" placeholder="Email" name="email" required>


	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" required>



    <button type="submit" class="btn" name="sign-up">Sign up </button>
    
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

	if(isset($_POST['sign-up']))
		{
    		$Username = $_POST['username'];
    		$Password = $_POST['password'];
    		$Email = $_POST['email'];


    		$sql = "INSERT INTO User (Email,Password,Username) VALUES ('$Email' , '$Password' , '$Username')";

    	if($conn->query($sql) === TRUE){
		echo "Succefully signed up";
		echo "<script> window.location.assign('login.php'); </script>";

	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


    	}
   
    	

    	


?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Spoton</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/banner/travel_HD.jpg'); background-position: center;  background-repeat: no-repeat; background-size: cover;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.png" style="margin-top: 100px" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="connection.php" method="post" >
					<span class="login100-form-title">
						Create Account
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid username is required: usermame">
						<input class="input100" type="text" name="_name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<a href="./create.php">
							<button type="button" class="login100-form-btn" style="width:290px">
								Create
							</button>

					</div>

					<?php 
					
					?>

					<div class="text-center p-t-136">
						<a class="txt2" href="./index.php">
							Already a member? Login Here
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- ------------------------------------------------------------- -->

	<?php
	
	if (isset($_POST['_name']) && isset($_POST['email']) && isset($_POST['pass'])){

		// $_name=preg_replace('/[^a-zA-Z0-9\ ]/','',$_POST['_name']);
		// $email=preg_replace('/[^a-zA-Z0-9\ ]/','',$_POST['email']);
		// $pass=preg_replace('/[^a-zA-Z0-9\ ]/','',$_POST['pass']);

		// /* Escape your input: use htmlspecialchars to avoid most obvious XSS attacks.
		// * Note: Your application may still be vulnerable to XSS if you use variables in an attribute without proper quoting.
		// */

		// $_name=htmlspecialchars($_name);
		// $email=htmlspecialchars($email);
		// $pass=htmlspecialchars($pass);

		$_name = $_POST['_name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

	}
	// Define MySQL connection and credentials
	$servername = "spoton";
	$username = "admin";
	$password = "admin";
	$databasename = "spoton"; 

	try {
		// Establish connection to database
		$conn = new mysqli($servername, $username, $password, $databasename);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";

		// Use prepared statements to mitigate SQL injection attacks.
		$sql = "INSERT INTO users (_name, email, pass) VALUES ('".$_name."', '".$email."', '".$pass."')";

		if (mysqli_query($conn, $sql)) {
			echo "New user added successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} catch (mysqli_error $e) {
		echo 'Error: ' . $e->getMessage() . " file: " . $e->getFile() . " line: " . $e->getLine();
		exit;
	}

	mysqli_close($conn);
?>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
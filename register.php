<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];



if (!empty($username) && !empty($password) && !empty($email) ){

	
		// Create connection
		$conn = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net", "be1b1941ee94e8", "c2031507", "versi_db");
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$query = "INSERT INTO users (username, password , email)
				VALUES('$username', '$password', '$email')";

		if (mysqli_query($conn, $query)) {
			echo "New record created successfully";
			$_SESSION["username"] = "$username";
			header("Location: index.php");

		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);





} else {
	$_SESSION['unfilled'] = "Please fill in the required boxes";
	header("Location: index.php");
}

?>
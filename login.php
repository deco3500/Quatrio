<?php
session_start();


$lusername = $_REQUEST['lusername'];
$lpassword = $_REQUEST['lpassword'];


$conn = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net", "be1b1941ee94e8", "c2031507", "versi_db", 3306);
	
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM versi_db.users WHERE username = '$lusername' AND password = '$lpassword'";
$queryActive = "SELECT activesession FROM versi_db.users WHERE username = '$lusername' AND password = '$lpassword' AND activesession = 1";

$result = mysqli_query($conn, $query);
$resultActive = mysqli_query($conn, $queryActive);


if(mysqli_num_rows($result) == 1){
	if(mysqli_num_rows($resultActive) == 0){
	$_SESSION['username'] = $lusername;
	$_SESSION['password'] = $lpassword;
	$setActive = "UPDATE users.users SET activesession = '1' WHERE username = '$lusername'";
	$resultSet = mysqli_query($conn, $setActive);
	header("Location: index.php");
	} else {
		$_SESSION['logged'] = "User already logged in.";
		header("Location: index.php");
	}
} else {
	$_SESSION['incorrect'] = "Incorrect username or password.";
	header("Location: index.php");
}

?>
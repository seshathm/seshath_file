<?php
$servername = "localhost";
$username = "seshath";
$password = "S3sh@th*7";
$dbname = "project";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
 
$sql = "INSERT INTO user (name, mobile, email, age, gender)
VALUES ('$name', '$mobile', '$email', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
  $_SESSION["success"] = "Thank you! Your account Registered successfully!";

  header('Location:user.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
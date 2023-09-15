<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Database connection code
  $con = mysqli_connect('localhost', 'root', '', 'form');

  // Check if the connection was successful
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Sanitize user input to prevent SQL injection
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  // Hash the password (you should use a better hashing method, like password_hash)
  $hashedPassword = md5($password);

  // Database insert SQL code
  $sql = "INSERT INTO `register` (`Id`, `username`, `email`, `password`) VALUES ('0', '$username', '$email', '$hashedPassword')";

  // Insert data into the database
  if (mysqli_query($con, $sql)) {
    echo "You Are Registered Successfully!";
  } else {
    echo "Error: " . mysqli_error($con);
  }

  // Close the database connection
  mysqli_close($con);
}
?>
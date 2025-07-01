<?php
session_start();

$conn = new mysqli("localhost", "root", "", "login_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = md5($_POST['password']); 

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION['user'] = $user;
  header("Location: admindashboard.html"); // redirect to dashboard
} else {
  echo "<script>alert('Invalid credentials!'); window.location.href='alogin.html';</script>";
}

$conn->close();
?>

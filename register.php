<?php
$conn = new mysqli("localhost", "root", "", "login_db");
if ($conn->connect_error) die("Connection failed");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "<script>alert('Registration successful!'); window.location='login.html';</script>";
} else {
    echo "<script>alert('User already exists.'); window.location='register.html';</script>";
}
$conn->close();
?>

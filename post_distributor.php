<?php
$conn = new mysqli("localhost", "root", "", "login_db");
if ($conn->connect_error) die("Connection failed");

$name = $_POST['name'];
$location = $_POST['location'];
$contact = $_POST['contact'];

$stmt = $conn->prepare("INSERT INTO distributors (name, location, contact) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $location, $contact);
$stmt->execute();

echo "<script>alert('Distributor posted!'); window.location.href='admindashboard.html';</script>";
$conn->close();
?>

<?php
$conn = new mysqli("localhost", "root", "", "login_db");
if ($conn->connect_error) die("Connection failed");

$location = $_POST['location'];
$ph = $_POST['ph_level'];
$moisture = $_POST['moisture_level'];
$crops = $_POST['crop_suggestion'];

$stmt = $conn->prepare("INSERT INTO soil_details (location, ph_level, moisture_level, crop_suggestion) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sdds", $location, $ph, $moisture, $crops);
$stmt->execute();

echo "<script>alert('Soil details posted!'); window.location.href='admindashboard.html';</script>";
$conn->close();
?>

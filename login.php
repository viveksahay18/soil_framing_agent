<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login_db");
if ($conn->connect_error) die("Connection failed");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit;
    }
}
echo "<script>alert('Invalid credentials'); window.location='login.html';</script>";
?>

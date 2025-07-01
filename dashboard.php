<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style4.css">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-logo">DASHBOARD</div>
    <ul class="navbar-links">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="view_soil.php">View Soil Details</a></li>
      <li><a href="view_distributor.php">View Distributors</a></li>
      <li><a href="logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <di<div class="dashboard-content">
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
  <p>Select an option below to proceed:</p>

  <div class="card-container">
    <!-- Soil Details Card -->
    <div class="card">
      <h3>Soil Details</h3>
      <p>Explore and manage soil types, properties, and compositions for optimal agricultural planning.</p>
      <a href="view_soil.php" class="card-btn">View Soil Details</a>
    </div>

    <!-- Distributor Details Card -->
    <div class="card">
      <h3>Distributors</h3>
      <p>Access and manage information about fertilizer and seed distributors in your region.</p>
      <a href="view_distributor.php" class="card-btn">View Distributors</a>
    </div>
  </div>
</div>

</body>
</html>

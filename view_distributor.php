<?php
$conn = new mysqli("localhost", "root", "", "login_db");

// Search logic
$search = '';
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $query = "SELECT * FROM distributors WHERE name LIKE '%$search%' OR location LIKE '%$search%'";
} else {
    $query = "SELECT * FROM distributors";
}
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Distributors</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
 
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f4fdf5;
  color: #2d4739;
}

.navbar {
  background-color: #2e7d32;
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar-logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: #e8f5e9;
}

.navbar-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

.navbar-links li a {
  text-decoration: none;
  color: #e8f5e9;
  padding: 0.5rem 1rem;
  transition: background 0.3s ease;
  border-radius: 4px;
}

.navbar-links li a:hover,
.logout-btn:hover {
  background-color: #388e3c;
}

.navbar-links li a.active {
  background-color: #43a047;
  font-weight: 600;
}

/* Container */
.container {
  max-width: 1000px;
  margin: 2rem auto;
  padding: 0 1rem;
}

h2 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #2e7d32;
}

/* Search Form */
.search-form {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
  flex-wrap: wrap;
}

.search-form input[type="text"] {
  padding: 0.6rem;
  width: 300px;
  max-width: 90%;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Smaller search button */
.search-form button.small-btn {
  padding: 0.4rem 0.8rem;
  font-size: 0.9rem;
  background-color: #43a047; 
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.search-form button.small-btn:hover {
  background-color: #388e3c;
}

/* Responsive Table */
.responsive-table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  border-radius: 6px;
  overflow: hidden;
}

.responsive-table th,
.responsive-table td {
  padding: 0.8rem 1rem;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

.responsive-table thead {
  background-color: #2e7d32;
  color: #fff;
}

.responsive-table tbody tr:hover {
  background-color: #e8f5e9;
}

/* Responsive for mobile */
@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }
  .navbar-links {
    flex-direction: column;
    width: 100%;
    margin-top: 1rem;
  }
  .navbar-links li {
    width: 100%;
  }
  .navbar-links li a {
    display: block;
    width: 100%;
  }
}

</style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-logo">SOIL FRAMING</div>
    <ul class="navbar-links">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="view_distributor.php" class="active">Distributor Details</a></li>
      <li><a href="logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>

  <div class="container">
    <h2>Distributor Details</h2>

    <form method="GET" class="search-form">
      <input
        type="text"
        name="search"
        placeholder="Search by name, location or contact..."
        value="<?= htmlspecialchars($search) ?>"
      />
      <button type="submit" class="small-btn">Search</button>
    </form>

    <table class="responsive-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Location</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['location']) ?></td>
            <td><?= htmlspecialchars($row['contact']) ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>

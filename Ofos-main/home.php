<?php
  require_once("./backend/config.php");
 
    if ($connection) {
        echo ('');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="home.css">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Site</h2>
                <button class="logout-btn" ><a href="index.php" style="text-decoration: none; color: white;">Logout</a></button>
            </div>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="order_manage.php"><i class="fas fa-receipt"></i> Orders</a></li>
                <li><a href="userlist.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="setting.php"><i class="fas fa-cogs"></i> Site Settings</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <div class="header">
                <h1>Online Food Ordering System </h1>
            </div>
            <div class="cards">
                <div class="card">
                    <h3>Total Active Menu</h3>
                    <p>6</p>
                </div>
                <div class="card">
                    <h3>Total Inactive Menu</h3>
                    <p>0</p>
                </div>
                <div class="card">
                    <h3>Orders for Verification</h3>
                    <p>1</p>
                </div>
                <div class="card">
                    <h3>Confirmed Orders</h3>
                    <p>2</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

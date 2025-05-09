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
    <title>Admin - Site Settings</title>
    <link rel="stylesheet" href="setting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Site</h2>
                <button class="logout-btn"> <a href="index.php" style="text-decoration: none; color: white;">Logout</a></button>
            </div>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="order_manage.php"><i class="fas fa-receipt"></i> Orders</a></li>
                <li><a href="userlist.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="setting.php"><i class="fas fa-cogs"></i> Site Settings</a></li>
            </ul>
        </aside>

        <main class="content">
            <h1>Site Settings</h1>
            <div class="settings">
                <div class="setting-item">
                    <label for="site-title">Site Title:</label>
                    <input type="text" id="site-title" placeholder="Enter site title">
                </div>
                <div class="setting-item">
                    <label for="site-description">Site Description:</label>
                    <textarea id="site-description" placeholder="Enter site description"></textarea>
                </div>
                <button class="save-btn">Save Settings</button>
            </div>
            <div class="about-contact">
                <h2>About Us</h2>
                <textarea id="about-us" placeholder="Enter about us description">Welcome to our Food Delivery System. We offer a wide variety of delicious dishes delivered right to your doorstep. Our goal is to provide high-quality food and excellent service to our customers. Thank you for choosing us!</textarea>
                <h2>Contact</h2>
                <div class="contact-info">
                    <label for="contact-email">Email:</label>
                    <input type="email" id="contact-email" placeholder="Enter contact email" value="support@fooddeliverysystem.com">
                </div>
                <div class="contact-info">
                    <label for="contact-phone">Phone:</label>
                    <input type="text" id="contact-phone" placeholder="Enter contact phone" value="(123) 456-7890">
                </div>
                <div class="contact-info">
                    <label for="contact-address">Address:</label>
                    <input type="text" id="contact-address" placeholder="Enter contact address" value="123 Food Street, Flavor Town, USA">
                </div>
                <button class="save-btn">Save Contact Info</button>
            </div>
        </main>
    </div>
</body>
</html>

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
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo">MKS</div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="practice.php">Login</a></li>
                    <li><a href="adminlogin.php">Admin Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="hero-text">
            <h1>About Our Food Ordering System</h1>
          
        </div>
    </section>
    <div class="container">
        <header class="header">
            <p>About US</p>
        </header>

        <section class="about-section">
            <h1 align="center">ABOUT US</h1>
            <h2>Who We Are</h2>
            <p>
                Welcome to our Online Food Ordering System! We are passionate about bringing great food right to your doorstep, with a convenient and user-friendly platform. Our mission is to provide an exceptional ordering experience, connecting customers with their favorite local restaurants and delivering meals efficiently and reliably.sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </section>

        <section class="vision-mission">
            <div class="mission">
                <h2>Our Mission</h2>
                <p>
                    To make food ordering simpler, faster, and more delightful, offering a wide range of cuisines and flavors for every occasion.
                </p>
            </div>

            <div class="vision">
                <h2>Our Vision</h2>
                <p>
                    We aim to become the leading food delivery platform, known for exceptional customer service, innovative technology, and a vast selection of restaurant partners.
                </p>
            </div>
        </section>

        <section class="team">
            <h2>Meet the Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <h3>Mst Monira khatun</h3>
                    <p>222400019</p>
                </div>
                <div class="team-member">
                    <h3>Jannat Samiya</h3>
                    <p>222400024</p>
                </div>
                <div class="team-member">
                    <h3>Nur-A khadija</h3>
                    <p> 222400003 </p>
                </div>
            </div>
        </section>

        <footer class="footer">
            <p>&copy; 2024 Online Food Ordering System. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>

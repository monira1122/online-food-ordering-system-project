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
    <title>Sign In - Food Delivery System</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="signup-box">
                <h2>Sign Up</h2>
                <form>
                <div class="user-box">
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    
                    </div>
                    <div class="user-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" id="password" required>
                        <label>Password</label>
                        </div>   
                    <div class="user-box">
                        <input type="number" name="contact" id="contact" required>
                        <label>Contact</label>
                    
                    </div>
                    <div class="button-container">
                        <button type="submit">
                        <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                           <a href="index.php" style="text-decoration: none;">Sign Up</a>
                            
                        </button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);
        }
    </script>
</body>
</html>

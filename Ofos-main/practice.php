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
    <link rel="stylesheet" href="practice.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="login-box">
                <h2>Sign In</h2>
                <form>
                    <div class="user-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" id="password" required>
                        <label>Password</label>
                    
                    </div>
                    <div class="button-container">
                        <button type="submit">
                        <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                           <a href="rough.php" style="text-decoration: none;">Login</a>
                            
                        </button>
                    </div>
                </form>
                <p class="signup-text">Don't have an account? <a href="signup.php" class="signup-link">Sign up</a></p>
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

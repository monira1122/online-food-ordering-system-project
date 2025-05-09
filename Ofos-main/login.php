

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Food Delivery System</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <div class="login-box">
                <h2>Sign In</h2>
                <form action="#" method="post">
                    <div class="user-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" id="password" required>
                        <label>Password</label>
                      
                    </div>
                    <div class="button-container">
                        <button type="submit" name="loginn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Login
                        </button>
                    </div>
                </form>
                <p class="signup-text">Don't have an account? <a href="#" class="signup-link">Sign up</a></p>
            </div>
        </div>
    </div>
<?php
  if(isset($_POST["loginn"]))
  {
    if (($_POST["password"] == '1234')) {
        $_SESSION['adminlogin'] = $_POST["email"];
        header('location:Cart.php');
    }
    else{
        header('location:login.php');
    }
  }
?>
</body>
</html>
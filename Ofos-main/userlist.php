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
    <title>User Management</title>
    <link rel="stylesheet" href="userlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
            <h2>Admin Site</h2><button class="logout-btn"> <a href="index.php" style="text-decoration: none; color: white;">Logout</a></button>
            </div>
            <ul>
                <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="order_manage.php"><i class="fas fa-receipt"></i> Orders</a></li>
                <li><a href="userlist.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="setting.php"><i class="fas fa-cogs"></i> Site Settings</a></li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="content">
            <header>
                <h1>Online Food Ordering System V2 - Admin Site</h1>
                <button class="new-user-btn">+ New User</button>
            </header>

            <div class="user-management">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Administrator</td>
                            <td>admin</td>
                            <td>
                                <div class="action-btn-group">
                                    <button class="action-btn">Action</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Staff</td>
                            <td>staff</td>
                            <td>
                                <div class="action-btn-group">
                                    <button class="action-btn">Action</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

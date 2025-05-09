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
    <title>Order Management</title>
    <link rel="stylesheet" href="order_manage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
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
        </nav>
        <div class="main-content">
            <h1>Order Management</h1>
            <table class="order-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>James Smith</td>
                        <td>Sample Address</td>
                        <td>jsmith@example.com</td>
                        <td>4756463215</td>
                        <td><span class="status confirmed">Confirmed</span></td>
                        <td><button class="view-btn" onclick="showOrderPopup()">View Order</button></td>
                    </tr>
                    <!-- Add more orders as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="orderPopup" class="popup-modal">
        <div class="popup-content">
            <h2>Order</h2>
            <table class="popup-table">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Order</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody id="orderDetails">
                    <!-- Order details will be injected here -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" style="text-align: right;">TOTAL</td>
                        <td>980.00</td>
                    </tr>
                </tfoot>
            </table>
            <div class="popup-buttons">
                <button onclick="confirmOrder()">Confirm</button>
                <button onclick="closeOrderPopup()">Close</button>
            </div>
        </div>
    </div>

    <script>
        function showOrderPopup() {
            document.getElementById("orderPopup").style.display = "flex";

            // Sample data for the order details
            const orderItems = [
                { qty: 1, order: "Lemon Iced Tea", amount: "15.00" },
                { qty: 1, order: "Steak", amount: "200.00" },
                { qty: 1, order: "Lemon Iced Tea", amount: "15.00" },
                { qty: 3, order: "Chicken2", amount: "750.00" },
            ];

            // Populate order details table
            const orderDetails = document.getElementById("orderDetails");
            orderDetails.innerHTML = orderItems.map(item => `
                <tr>
                    <td>${item.qty}</td>
                    <td>${item.order}</td>
                    <td>${item.amount}</td>
                </tr>
            `).join("");
        }

        function closeOrderPopup() {
            document.getElementById("orderPopup").style.display = "none";
        }

        function confirmOrder() {
            alert("Order confirmed!");
            closeOrderPopup();
        }
    </script>
</body>
</html>

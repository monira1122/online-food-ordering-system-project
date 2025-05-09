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
    <link rel="stylesheet" href="Cart.css">
    <title>Shopping Cart</title>
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <div class="site-title">MKS</div>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="Cart.php">Cart</a>
            <a href="aboutus.php">About</a>
            <a href="practice.php">Login</a>
            <a href="adminlogin.php">Admin Login</a>
        </nav>
    </header>

    <!-- Small Order Confirmation Box at the Top -->
    <div id="confirmation-box" class="confirmation-box">Order Confirmed</div>

    <!-- Cart Title -->
    <h1 class="cart-title">Shopping Cart</h1>

    <!-- Main Section -->
    <section class="cart-section">
        <div class="cart-container">
            <div id="cart-items" class="cart-items"></div>
            <div class="total-summary">
                <h2>Total Amount</h2>
                <p id="total-amount">0.00</p>
                <button class="checkout-button" onclick="confirmOrder()">Confirm</button>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        const cartData = [
            {
                image: 'img/chicken.jpg',
                name: 'Chicken2',
                description: 'Lorem Ipsum is simply dummy text of the printing and typesetting industry...',
                unitPrice: 250.00,
                quantity: 1
            },
            {
                image: 'img/sushi.jpg',
                name: 'Pasta Delight',
                description: 'A delightful pasta with creamy sauce and herbs.',
                unitPrice: 150.00,
                quantity: 2
            }
        ];

        function renderCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';
            let totalAmount = 0;

            cartData.forEach((item, index) => {
                const itemTotal = item.unitPrice * item.quantity;
                totalAmount += itemTotal;

                cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <button class="delete-btn" onclick="removeItem(${index})">🗑️</button>
                        <img src="${item.image}" alt="${item.name}" class="item-image">
                        <div class="item-details">
                            <h2>${item.name}</h2>
                            <p>${item.description}</p>
                            <p>Unit Price: ${item.unitPrice.toFixed(2)}</p>
                            <div class="qty-section">
                                <label>Qty:</label>
                                <button class="qty-btn" onclick="decrement(${index})">-</button>
                                <input type="number" id="cart-qty-${index}" value="${item.quantity}" min="1" readonly>
                                <button class="qty-btn" onclick="increment(${index})">+</button>
                            </div>
                        </div>
                        <div class="item-total">${itemTotal.toFixed(2)}</div>
                    </div>
                `;
            });

            document.getElementById('total-amount').textContent = totalAmount.toFixed(2);
        }

        function increment(index) {
            cartData[index].quantity++;
            renderCartItems();
        }

        function decrement(index) {
            if (cartData[index].quantity > 1) {
                cartData[index].quantity--;
            }
            renderCartItems();
        }

        function removeItem(index) {
            cartData.splice(index, 1); // Remove item from cartData array
            renderCartItems(); // Re-render the cart items
        }

        function confirmOrder() {
            const confirmationBox = document.getElementById('confirmation-box');
            confirmationBox.style.display = 'block';
            setTimeout(() => {
                confirmationBox.style.display = 'none';
            }, 2000);
        }

        renderCartItems();
    </script>

</body>
</html>
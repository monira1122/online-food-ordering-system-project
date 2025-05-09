<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="restaurant-info">
                <img src="img/food.jpg" alt="Restaurant 1" class="restaurant-image">
                <h1 class="restaurant-name">Chunks</h1>
            </div>
            <div class=""></div>
            <div class="navbar">
                <a href="index.php" style="text-decoration: none;">Home</a>
                <a href="Cart.php">Cart</a>
                <a href="aboutus.php">About</a>
                <a href="practice.php" style="text-decoration: none;">Login</a>
                <a href="adminlogin.php" style="text-decoration: none;">Admin Login</a>
            </div>
        </div>
    </header>

    <h2 class="menu-title">Menu</h2>
    
    <div class="menu-section">
        <div class="food-item" onclick="showPopup('Chicken Sandwich', 'Grilled chicken sandwich with lettuce and sauce.', 'img/chicken.jpg')">
            <img src="img/chicken.jpg" alt="Food 1">
            <h2>Chicken Sandwich</h2>
            <p>Grilled chicken sandwich with lettuce and sauce.</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Pizza', 'Pepperoni pizza with extra cheese.', 'img/san.jpg')">
            <img src="img/san.jpg" alt="Food 2">
            <h2>Pizza</h2>
            <p>Pepperoni pizza with extra cheese.</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Pasta', 'Italian-style pasta with marinara sauce.', 'img/sand2.jpg')">
            <img src="img/sand2.jpg" alt="Food 3">
            <h2>Pasta</h2>
            <p>Italian-style pasta with marinara sauce.</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Burger', 'Cheeseburger with fries on the side.', 'img/burger.jpg')">
            <img src="img/burger.jpg" alt="Food 4">
            <h2>Burger</h2>
            <p>Cheeseburger with fries on the side.</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Salad', 'Fresh garden salad with vinaigrette.', 'img/burger2.jpg')">
            <img src="img/burger2.jpg" alt="Food 5">
            <h2>Salad</h2>
            <p>Fresh garden salad with vinaigrette.</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Sushi', 'Assorted sushi rolls with soy sauce.', 'img/sushi.jpg')">
            <img src="img/sushi.jpg" alt="Food 6">
            <h2>Sushi</h2>
            <p>Assorted sushi rolls with soy sauce.</p>
            <button>View</button>
        </div>
        <div class="food-item" onclick="showPopup('Steak', 'Grilled steak with mashed potatoes.', 'img/burger2.jpg')">
            <img src="img/burger2.jpg" alt="Food 7">
            <h2>Steak</h2>
            <p>Grilled steak with mashed potatoes.</p>
            <button>View</button>
        </div>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hidePopup()">&times;</span>
            <img id="popup-image" src="" alt="Food Image">
            <h2 id="popup-title"></h2>
            <p id="popup-description"></p>
            <label for="quantity">Quantity:</label>
            <div class="quantity-controls">
                <button onclick="updateQuantity(-1)">-</button>
                <input type="number" id="quantity" name="quantity" min="1" value="1">
                <button onclick="updateQuantity(1)">+</button>
            </div>
            <button onclick="addToCart()">Add to Cart</button>
        </div>
    </div>

    <script>

function showPopup(title, description, imageUrl) {
    document.getElementById('popup-title').innerText = title;
    document.getElementById('popup-description').innerText = description;
    document.getElementById('popup-image').src = imageUrl;
    document.getElementById('popup').classList.add('active');
}

function hidePopup() {
    document.getElementById('popup').classList.remove('active');
}

function updateQuantity(amount) {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    currentQuantity += amount;
    if (currentQuantity < 1) {
        currentQuantity = 1;
    }
    quantityInput.value = currentQuantity;
}

function addToCart() {
    const quantity = document.getElementById('quantity').value;
    alert(`Item added to cart! Quantity: ${quantity}`);
    hidePopup();
}

    </script>
</body>
</html>

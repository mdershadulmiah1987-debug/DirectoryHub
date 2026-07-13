<?php
include 'includes/visitor.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DirectoryHub - Business Directory</title>
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<!-- Header -->
<header>
    <div class="logo">DirectoryHub</div>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>
            <li><a href="single-listing.php">Sigle-Listing</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="dashboard.php">dashboard</a></li>
            <li><a href="logout.php">Logout</a></li> 
        </ul>
    </nav>

    <button id="darkModeBtn">
        <i class="fas fa-moon"></i>
    </button>
</header>

<!-- Hero -->
<section class="hero">
    <h1>Find Trusted Businesses Near You</h1>
    <p>Search thousands of local businesses and services.</p>

    <div class="search-box">
        <input type="text" placeholder="Search business...">

        <select>
            <option>Category</option>
            <option>Restaurant</option>
            <option>Hotel</option>
            <option>Hospital</option>
            <option>School</option>
        </select>

        <button>Search</button>
    </div>
</section>

<!-- Categories -->
<section class="categories">

    <h2>Popular Categories</h2>

    <div class="category-grid">

        <div class="card">
            <i class="fas fa-utensils"></i>
            <h3>Restaurant</h3>
        </div>

        <div class="card">
            <i class="fas fa-hotel"></i>
            <h3>Hotel</h3>
        </div>

        <div class="card">
            <i class="fas fa-hospital"></i>
            <h3>Hospital</h3>
        </div>

        <div class="card">
            <i class="fas fa-graduation-cap"></i>
            <h3>School</h3>
        </div>

    </div>
</section>

<!-- Featured Listings -->
<section class="featured">

    <h2>Featured Businesses</h2>

    <div class="listing-grid">

        <div class="listing-card">
            <img src="https://picsum.photos/400/250?1">
            <h3>ABC Restaurant</h3>
            <p>Best food in town.</p>
            <span>⭐ 4.9</span>
        </div>

        <div class="listing-card">
            <img src="https://picsum.photos/400/250?2">
            <h3>Grand Hotel</h3>
            <p>Luxury stay experience.</p>
            <span>⭐ 4.8</span>
        </div>

        <div class="listing-card">
            <img src="https://picsum.photos/400/250?3">
            <h3>City Hospital</h3>
            <p>24/7 healthcare service.</p>
            <span>⭐ 4.7</span>
        </div>

    </div>

</section>

<!-- Footer -->
<footer>
    <p>© 2026 DirectoryHub. All Rights Reserved.</p>
</footer>

<script src="./assets/js/script.js"></script>
</body>
</html>

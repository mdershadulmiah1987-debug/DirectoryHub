<?php
include 'includes/config.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    $result = mysqli_query($conn, $sql);

    if($result){

        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";

        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>

<link rel="stylesheet" href="./assets/css/register.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<header>

    <div class="logo">DirectoryHub</div>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="listings.php">Listings</a></li>
            <li><a href="single-listing.php">Single Listing</a></li>
            <li><a href="categories.php">Categories</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

</header>

<div class="auth-box">

    <h2>Create Account</h2>

    <form method="POST">

        <input
            type="text"
            name="name"
            placeholder="Full Name"
            required>

        <input
            type="email"
            name="email"
            placeholder="Email"
            required>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required>

        <button
            type="submit"
            name="register">
            Register
        </button>

    </form>

</div>

</body>
</html>

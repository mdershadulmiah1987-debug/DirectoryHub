<?php
session_start();
require_once 'includes/config.php';

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            $ip = $_SERVER['REMOTE_ADDR'];
            $device = $_SERVER['HTTP_USER_AGENT'];

            $logQuery = "INSERT INTO login_logs
            (user_id, login_time, ip_address, device_info, status)
            VALUES
            ('{$user['id']}', NOW(), '$ip', '$device', 'online')";

            mysqli_query($conn, $logQuery);

            $_SESSION['log_id'] = mysqli_insert_id($conn);

            echo "<script>
                    alert('Login Successful');
                    window.location='dashboard.php';
                  </script>";
            exit;
        }
    }

    echo "<script>alert('Invalid Email or Password');</script>";
}
?>

<?php
include 'includes/visitor.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="./assets/css/login.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
<!-- Header -->
<header>
    <div class="logo">DirectoryHub</div>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="listings.html">Listings</a></li>
            <li><a href="single-listing.html">Sigle-Listing</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="dashboard.html">dashboard</a></li>
            <li><a href="logout.php">Logout</a></li> 
        </ul>
    </nav>

    <button id="darkModeBtn">
        <i class="fas fa-moon"></i>
    </button>
</header>
<div class="auth-box">
    <h2>Welcome Back</h2>

    <form method="POST">
    <input type="email" name="email" placeholder="Enter your email" required>

    <input type="password" name="password" placeholder="Enter your password" required>

    <button type="submit" name="login">Login</button>
</form>
</div>

</body>
</html>

<?php
session_start();
require_once 'includes/config.php';

if(isset($_SESSION['log_id'])){

    $log_id = $_SESSION['log_id'];

    mysqli_query($conn,"
    UPDATE login_logs
    SET
        logout_time = NOW(),
        status = 'offline'
    WHERE id = '$log_id'
    ");
}

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout - DirectoryHub</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#4f46e5,#7c3aed);
}

.logout-box{
    background:#fff;
    padding:40px;
    border-radius:15px;
    text-align:center;
    width:90%;
    max-width:450px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.logout-box i{
    font-size:60px;
    color:#22c55e;
    margin-bottom:20px;
}

.logout-box h1{
    margin-bottom:10px;
    color:#333;
}

.logout-box p{
    color:#666;
    margin-bottom:25px;
}

.btn{
    display:inline-block;
    padding:12px 25px;
    background:#4f46e5;
    color:#fff;
    text-decoration:none;
    border-radius:8px;
    transition:.3s;
}

.btn:hover{
    background:#3730a3;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<meta http-equiv="refresh" content="3;url=login.php">

</head>
<body>

<div class="logout-box">

    <i class="fas fa-check-circle"></i>

    <h1>Logged Out Successfully</h1>

    <p>
        You have been logged out from your account.<br>
        Redirecting to Login Page...
    </p>

    <a href="login.php" class="btn">
        Go to Login
    </a>

</div>

</body>
</html>
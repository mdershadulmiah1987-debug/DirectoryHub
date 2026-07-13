<?php

include 'includes/visitor.php';

include 'includes/config.php';


$sql = "SELECT * FROM businesses";

$result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Business Listings</title>

<link rel="stylesheet" href="./assets/css/listings.css">

</head>


<body>


<!-- Header -->

<header>

<div class="logo">DirectoryHub</div>


<nav>

<ul>

<li><a href="index.php">Home</a></li>

<li><a href="listings.php">Listings</a></li>

<li><a href="single-listing.php">Single Listing</a></li>

<li><a href="categories.php">Categories</a></li>

<li><a href="/directory_website_2/about.php">About</a></li>

<li><a href="contact.php">Contact</a></li>

<li><a href="login.php">Login</a></li>

<li><a href="register.php">Register</a></li>

<li><a href="dashboard.php">Dashboard</a></li>

<li><a href="logout.php">Logout</a></li>
<li><a href="single-listing.php?id=<?php echo $row['id']; ?>">
    View Details
</a></li>

</ul>

</nav>


<button id="darkModeBtn">

<i class="fas fa-moon"></i>

</button>


</header>



<!-- Page Banner -->

<section class="page-banner">

<h1>All Businesses</h1>

</section>




<!-- Business Listing -->

<section class="listing-grid">



<?php


if(mysqli_num_rows($result) > 0){



while($row = mysqli_fetch_assoc($result)){



?>


<div class="listing-card">



<img 
src="images/<?php echo $row['image']; ?>" 
alt="<?php echo $row['business_name']; ?>">



<h3>

<?php echo $row['business_name']; ?>

</h3>



<p>

<?php echo $row['category']; ?>

</p>



<p>

<?php echo $row['address']; ?>

</p>



<a href="single-listing.php?id=<?php echo $row['id']; ?>">

View Details

</a>



</div>



<?php


}


}

else{


?>


<div class="no-result">

<h3>No Business Found!</h3>

<p>Please check again later.</p>

</div>


<?php


}


?>



</section>




<script src="./assets/js/script.js"></script>


</body>

</html>
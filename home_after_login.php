<!DOCTYPE html>
<html>
<head>
	<title>Home after Login - Shipping Containers Company</title>
	<link rel="stylesheet" type="text/css" href="home_after_login.css">
</head>
<body>
	<header>
		<h1>Kenya Ports Container Management</h1>
		<h3>Hello, <?php echo $_GET['first_name']; ?></h3>

        <a href="logout.php" class="logout-button">Logout</a>


	</header>
	<nav>
		<a href="Home.html">Home</a>
		<a href="Services.html">Services</a>
		<a href="About.html">About Us</a>
		<a href="Contacts.html">Contact Us</a>
        <a href="Sign up.html">Sign up</a>
	</nav>
	<section>
		<h4>Welcome to our shipping containers management system!</h4>
		<h5>Please use the navigation links to explore our services and learn more about our company.</h5>
	</section>

    <!-- write from here  -->
    <?php
// Retrieve the user's information from the URL parameters
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$email_address = $_GET['email'];
$container_type = $_GET['container_type'];
$container_weight = $_GET['container_weight'];
?>
<div class="user-info">
<!-- Display the user's information on the page -->
<span class="label">First name:</span> <?php echo $first_name; ?></p>
<span class="label">Last name:</span> <?php echo $last_name; ?></p>
<span class="label">Email Address:</span> <?php echo $email_address; ?></p>
<span class="label">Container Type:</span> <?php echo $container_type; ?></p>
<span class="label">Container Weight:</span> <?php echo $container_weight; ?>kg</p>


<p>To view container location</p>
<a class="link" href="map.html">Click here to view location</a>
</div>



    <!-- To here -->
	<footer>
		<p>&copy; 2023 Kenya Ports Container Management Company. All rights reserved.</p>
	</footer>

</body>
</html>

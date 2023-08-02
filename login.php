<?php

// Check if the user is already logged in
session_start();
if(isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

// Set the database connection variables
$database_name = "C:\\Users\\Sammmy\\Desktop\\School project\\School_Project.accdb";
$database_username = "";
$database_password = "";

// Establish a connection to the database
$database_connection = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$database_name;Uid=$database_username;Pwd=$database_password");

// Check connection
if (!$database_connection) {
    die("Connection failed: " . odbc_error());
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve the submitted email and password from login html
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if the email and password are valid
    $query = "SELECT * FROM Customer_table WHERE Email = :email AND Password_field = :password";
    $statement = $database_connection->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->bindParam(":password", $password);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Login successful, retrieve the user's first name, last name, email, container type, and container weight
        $first_name = $result['first_name'];
        $last_name = $result['last_name'];
        $email_address = $result['Email'];
        $container_type = $result['container_type'];
        $container_weight = $result['container_weight'];

        // Redirect to another HTML page and pass the user's information as parameters
        header("Location: home_after_login.php?first_name=$first_name&last_name=$last_name&email=$email_address&container_type=$container_type&container_weight=$container_weight");
        exit();
    } else {
        // Login failed, show an error message
        echo "Invalid email or password.";
    }

}
?>































<!-- <?php

// Check if the user is already logged in
session_start();
if(isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

// Set the database connection variables
$database_name = "C:\\Users\\Sammmy\\Desktop\\School project\\School_Project.accdb";
$database_username = "";
$database_password = "";

// Establish a connection to the database
$database_connection = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$database_name;Uid=$database_username;Pwd=$database_password");

// Check connection
if (!$database_connection) {
    die("Connection failed: " . odbc_error());
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve the submitted email and password from login html
    $email = $_POST["email"];
    $password = $_POST["password"];

   // Check if the email and password are valid
$query = "SELECT * FROM Customer_table WHERE Email = :email AND Password_field = :password";
$statement = $database_connection->prepare($query);
$statement->bindParam(":email", $email);
$statement->bindParam(":password", $password);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

if ($result) {
    // Login successful, retrieve the user's first name
    $first_name = $result['first_name'];
    // Redirect to another HTML page and pass the user's first name as a parameter
    header("Location: home_after_login.php?name=$first_name");
    exit();
} else {
    // Login failed, show an error message
    echo "Invalid email or password.";
}

}

?> -->


























<!-- <?php

// Set the database connection variables
$database_name = "C:\\Users\\Sammmy\\Desktop\\School project\\School_Project.accdb";
$database_username = "";
$database_password = "";

// Establish a connection to the database
$database_connection = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$database_name;Uid=$database_username;Pwd=$database_password");

// Check connection
if (!$database_connection) {
    die("Connection failed: " . odbc_error());
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve the submitted email and password from login html
    $email = $_POST["email"];
    $password = $_POST["password"];



    // Check if the email and password are valid
    $query = "SELECT * FROM Customer_table WHERE Email = :email AND Password_field = :password";
    $statement = $database_connection->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->bindParam(":password", $password);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Login successful, redirect to another HTML page
        header("Location: home.html");
        exit();
    } else {
        // Login failed, show an error message
        echo "Invalid email or password.";
    }
}

?> -->

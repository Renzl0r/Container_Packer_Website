<?php

// Database connection parameters
$dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\Users\\Sammmy\\Desktop\\School project\\School_Project.accdb";

// Database credentials
$username = ""; // Enter your database username here
$password = ""; // Enter your database password here

// Establish a database connection
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Get the form data
$firstName = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : "";
$containerType = isset($_POST['container_type']) ? $_POST['container_type'] : "";
$containerWeight = isset($_POST['container_weight']) ? $_POST['container_weight'] : 0;

// Insert the data into the database
$sql = "INSERT INTO Container_registration (first_name, last_name, container_type, container_weight) VALUES (?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(1, $firstName, PDO::PARAM_STR);
$stmt->bindParam(2, $lastName, PDO::PARAM_STR);
$stmt->bindParam(3, $containerType, PDO::PARAM_STR);
$stmt->bindParam(4, $containerWeight, PDO::PARAM_INT);

if ($stmt->execute()) {


    echo "Data inserted successfully. Redirecting to output page...";
            header("Refresh: 5; url=Output.html");

    // echo "<a href='Confirmation.php'>Click here to go back to the homepage.</a>";
    
} else {
    echo "Error inserting data: " . $stmt->errorInfo()[2];
}


// Close the database connection
$connection = null;

?>















<!-- <?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\Users\\Sammmy\\Desktop\\School project\\School_Project.accdb";

// Database credentials
$username = ""; // Enter your database username here
$password = ""; // Enter your database password here

// Establish a database connection
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Get the form data
$firstName = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : "";
$containerType = isset($_POST['container_type']) ? $_POST['container_type'] : "";
$containerWeight = isset($_POST['container_weight']) ? $_POST['container_weight'] : 0;

// Convert container weight to integer
$containerWeight = intval($containerWeight);

// Insert the data into the database
$sql = "INSERT INTO Container_registration (first_name, last_name, container_type, container_weight) VALUES (?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(1, $firstName, PDO::PARAM_STR);
$stmt->bindParam(2, $lastName, PDO::PARAM_STR);
$stmt->bindParam(3, $containerType, PDO::PARAM_STR);
$stmt->bindParam(4, $containerWeight, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $stmt->errorInfo()[2];
}

// Close the database connection
$connection = null;

?>
 -->









































<!-- <?php

// Database connection parameters
$dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\Users\\Sammmy\\Desktop\\School project\\School_Project.accdb";

// Database credentials
$username = ""; // Enter your database username here
$password = ""; // Enter your database password here

// Establish a database connection
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Get the form data
$firstName = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : "";
$containerType = isset($_POST['container_type']) ? $_POST['container_type'] : "";
$containerWeight = isset($_POST['container_weight']) ? $_POST['container_weight'] : 0;

// Insert the data into the database
$sql = "INSERT INTO Container_registration (first_name, last_name, container_type, container_weight) VALUES (?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bindParam(1, $firstName, PDO::PARAM_STR);
$stmt->bindParam(2, $lastName, PDO::PARAM_STR);
$stmt->bindParam(3, $containerType, PDO::PARAM_STR);
$stmt->bindParam(4, $containerWeight, PDO::PARAM_INT);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $stmt->errorInfo()[2];
}

// Close the database connection
$connection = null;

?> -->




















<!-- <?php

// Connect to the database
$connection = new COM("ADODB.Connection");
$dsn = "Driver={Microsoft Access Driver (*.mdb)};Dbq=C:\Users\Sammmy\Desktop\School project\School_Project.accdb;";
$connection->Open($dsn);

// Get the form data
$firstName =isset($_POST['first_name']);
$lastName =isset($_POST['last_name']);
$containerType =isset($_POST['container_type']);
$containerWeight =isset($_POST['container_weight']);

// Insert the data into the database
$sql = "INSERT INTO Container_registration (first_name, last_name, container_type, container_weight) VALUES ('$firstName', '$lastName', '$containerType', '$containerWeight')";
$connection->Execute($sql);

// Close the database connection
$connection->Close();

echo "Data inserted successfully.";

?> -->
<?php
$servername = "localhost";
$username   = "root"; //default in xampp
$password   = "";     //default in xampp
$dbname     = "student_db";

// Create connection
$conn = new mysqli(hostname: $servername,username: $username,password: $password,database: $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get data from form
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

// Insert data into database
    $sql = "INSERT INTO students (name, email, course) 
            VALUES ('$name', '$email', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo " New student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
?>
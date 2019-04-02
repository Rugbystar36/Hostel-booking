<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
extract($_POST);
$sql = "INSERT INTO users (fname, lname, email, mobileno, dob, password, address, gender,meals,laundry,balcony,state)
VALUES ('$fname', '$lname', '$email', $mobNo,'$date','$password','$Address','$gender',1,1,1,'$state')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("Location: signup.php?msg=failed");
}

$conn->close();
?>
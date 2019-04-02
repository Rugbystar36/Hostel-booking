<?php
$servername = "localhost";
$dbname = "hostel management";

// Create connection
$conn = new mysqli($servername,"root","", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
extract($_POST);


$sql = "SELECT email from users where email='$email' AND password='$password' ";
$result = $conn->query($sql);
if ($result) {
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["email"] = $row['email'];
        header('Location: homeless.php');
        exit();
    }
    else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: login.php?msg=failed');
        exit();
    }
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: login.php?msg=failed');
    exit();
}

$conn->close();
?>


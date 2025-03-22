<?php
session_start(); 
include_once('connect.php');
if (isset($_POST['submitt'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $service = $_POST['service'];
    $comment = $_POST['comment'];
    $today = date('Y-m-d');
    
    $name = mysqli_real_escape_string($conn, $name);
    $email= mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $location = mysqli_real_escape_string($conn, $location);
    $service = mysqli_real_escape_string($conn, $service);
    $comment = mysqli_real_escape_string($conn, $comment);
   echo $service;
    
    $sql = "INSERT INTO `servicerequest`(`Name`, `Email`, `Phone`, `Service`, `Location`, `Comment`,`Date`)
VALUES ('$name','$email','$phone','$service','$location','$comment','$today')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    // If the insert was successful, display a success message
  header("Location:success.html", true, 301);
} else {
    // If there was an error, display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}
?>
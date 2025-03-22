<?php
session_start();
include_once('connect.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $email= mysqli_real_escape_string($conn, $email);

    $pass = mysqli_real_escape_string($conn, $pass);


    $sql = "SELECT * FROM `Admin` WHERE (`Username`='$email' && `Pass`='$pass')";
    $result = $conn->query($sql);
if($result){
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { 
       
        $_SESSION['id']=$row["ID"];
      }
        // Redirect to the admin page
        header("Location: admin.php", true, 301);
       
    } else {
        $_SESSION['status'] = "Your Username/Password do not match";
        echo"donot match";
       // header("Location: loginform.php", true, 301);
       // exit();
    }
}
else{
   
    // Display an error message if the query fails
    echo "Error retrieving data: " . mysqli_error($conn);
}

}


$conn->close();
?>

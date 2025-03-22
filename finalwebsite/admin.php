<?php
include_once('connect.php');
session_start();

if (!isset($_SESSION['id'])) {
    // Redirect to the login form if the user is not logged in
    header("Location: loginform.php");
    exit();
}
else{
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Libs -->
    <link rel="stylesheet" href="./assets/libs/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark navbar-default py-3 py-lg-2">
        <div class="container">
            <a href="#" class="navbar-brand d-block d-lg-none">
            <img src="./assets/images/logo.png" alt="" class="img-fluid">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
    </ul>
                </div>

            </div>
        </div>
    </nav>




    <main>
 

        <!--form-->
        <section class="py-xl-11 py-6 bg-light" style="margin-top:3rem">
            <div class="container">
                <div class="row  mt-xl-n16">
             

                        <div class=" card text-center   border-2 h-20 ">
                            <div class="card-body p-5">
                                <div class=" mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--ac-primary)" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-2">Total Forms</h3>
                                    <address class="mb-0">
                                        Up to today<br><strong>
                                        <?php

$query = "SELECT COUNT(*) AS total_records FROM `Servicerequest`";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total number of records
    $row = mysqli_fetch_assoc($result);
    $totalRecords = $row['total_records'];

    // Display the total number of records
    echo $totalRecords;
} else {
    // Display an error message if the query fails
    echo "Error counting records: " . mysqli_error($conn);
}
?></strong>
 Forms
                                    </address>
                                </div>
                            </div>
                        </div>

                    </div>
                 

                        <div class="card text-center  border-2 h-30">
                            <div class="card-body p-5">
                                <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="var(--ac-primary)" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg>
                                </div>
                                <div>
                                <h3 class="mb-2">Today's Forms</h3>

                                <div class="">Today 
                                <?php
                                    $today = date('Y-m-d');
                                    echo $today;
                                ?>
                                
                                <br><strong>
                                    <?php
                                   
                                    // Assuming you have already established a database connection
                                    
                                    $date = date('Y-m-d'); 
                                    
                                    // Query to count the records with the same date
                                    $query = "SELECT COUNT(*) AS count FROM `Servicerequest` WHERE `Date` = '$date'";
                                    
                                    // Execute the query
                                    $result1 = mysqli_query($conn, $query);
                                    
                                    // Check if the query was successful
                                    if ($result1) {
                                        // Fetch the count value
                                        $row = mysqli_fetch_assoc($result1);
                                        $count = $row['count'];
                                    
                                        // Display the count
                                        echo $count;
                                    } else {
                                        // Display an error message if the query fails
                                        echo "Error counting records: " . mysqli_error($conn);
                                    }
                                    
                                    // Close the database connection
                                 
                                    ?>
</strong>
                                
                                    Forms</div>
                                </div>
                            </div>
                        </div>
                    </div>

              

                               
                <div class="row mt-lg-8 mt-4">
                    <div class="col-lg-10 offset-lg-1">
                      
                            <h2 class="mb-7">Filled Forms (Sorted By Date)</h2>
                                <div class="row">
                                <h2>Application Details</h2>
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
    <tr>
        <th>Date</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Location</th>
        <th>Applied Service</th>
        <th>Email</th>
        <th>Comment</th>
    </tr>
                                </thead>
                                <tbody>
        <?php
        
        // Assuming you have already established a database connection
        
        // Query to retrieve data from the table in descending order
        $query = "SELECT * FROM `servicerequest` ORDER BY `Date` DESC";
        
        // Execute the query
        $result = mysqli_query($conn, $query);
    
        
        // Check if the query was successful
        if ($result) {
            // Fetch and display the data
            while ($row = mysqli_fetch_assoc($result)) {
                // Access individual columns using $row['column_name']
                $date=$row['Date'];
                $name = $row['Name'];
                $email = $row['Email'];
                $phone = $row['Phone'];
                $location = $row['Location'];
                $service = $row['Service'];
                $comment = $row['Comment'];
        echo'
    <tr>
        <td>'.$date.'</td>
        <td>'.$name.'</td>
        <td>'.$phone.'</td>
        <td>'.$location.'</td>
        <td>'.$service.'</td>
        <td>'.$email.'</td>
        <td>'.$comment.'</td>
        <td>
        </td>
    </tr>';
             
            }
        } else {
            echo"Not found";
            // Display an error message if the query fails
            //echo "Error retrieving data: " . mysqli_error($connection);
        }
        
        // Close the database connection
     $conn->close();
        ?>
        
    </tbody>
    </table>
    </div>
</div>
</div>
    </div>
        </section>


    </main>

    <!-- Libs JS -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>






    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>

</body>

</html>

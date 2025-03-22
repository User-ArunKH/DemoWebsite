<!DOCTYPE html>
<html lang="en">

<head>
   
    <link rel="stylesheet" href="login.css">
    <script src="validation.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;" >
        <div class="container py-5 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100"
            >
                <div class="col-xl-10" >
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4" >

                                    <div class="text-center">
                                        <img src=""
                                            style="width: 60px; border-radius:5px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Log In To Admin Panel</h4>
                                    </div>
   
    <?php
       session_start();
       if(isset($_SESSION['status'])) 
        {
            ?>
<div  class="alert alert-warning" role="alert">
    <?php echo $_SESSION['status']; ?>
        </div>
            <?php
            unset($_SESSION['status']);
        }
        ?>
<!---------------------------------form------------>
                                    <form method="post" action="logincheckk.php" onsubmit="return validation();">
                                   <p>Please login to your account</p>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username</label>
                                            <input type="text" name="email" id="username" class="form-control"
                                                placeholder="Enter Your User Name" />

                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label"  for="form2Example22">Password</label>
                                            <input type="password" name='password' id="pass"
                                                class="form-control" placeholder="Enter password" />
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">

                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                name="submit" type="submit">Log in</button>
                                            <br>

                                            </form>
                                            <!--------------form close------------>
                                            <a class="text-muted" href="#">Forgot password?</a>
                                        </div>
                                   
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>
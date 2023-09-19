<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Favicon-->
    <link rel="icon" href="images/gamelogo.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>


<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `registration` WHERE username='$username' and password='$password'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "Login Successfully";
            $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location:manage.php');
        } else {
            // echo "Invalid Data";
            $invalid = 1;
        }
    }
}
?>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(8, 8, 8, 0.7)">
        <div class="container ">
            <a class="navbar-brand"><img src="images/gamelogo.jpg" style="width: 60px; height:60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " href="sign.php">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success</strong> You are Successfully logged in.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>

    <?php
    if ($invalid) {
        echo '<script>alert("Invalid data Please try Again")</script>';
    }
    ?>


    <section class="img-fluid section text-white" style="height: 100vh; background-image: linear-gradient(rgba(0, 0, 0, 0.827),rgba(0, 0, 0, 0.8)) , url(images/banner01.jpeg);">>
        <br><br><br><br>
        <h1 class="text-center mt-5">Login Here</h1>
        <div class="container" style="display: flex; justify-content: center; ">
            <div class="row mt-3" style="background-color:rgb(158, 177, 240);">
                <div class="col-md-12">
                    <form method="POST" action="login.php" enctype="multipart/form-data">
                        <label for="username" class="col-sm-6 col-form-label fs-5 fw-bold">
                            Name
                        </label>
                        <div class="col-sm-12">
                            <input type="text" name="username" class="form-control">
                        </div>

                        <label for="price" class="col-sm-6 col-form-label fs-5 fw-bold">
                            Password
                        </label>
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="col-auto text-center mt-3 ">
                            <button name="signup" class="btn btn-primary mb-3 w-100 fs-5 fw-bold">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


</body>

</html>
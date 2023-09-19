<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!--Favicon-->
    <link rel="icon" href="images/gamelogo.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

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
                        <a class="nav-link active fs-5" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="sign.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Image Slider
        ---------------------------------------------------------- -->
        <section>
            <div class="section">
                <div class="container-fluid1">
                    <div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="images/banner01.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>The Biggest Game Releases of August 2024 - IGN</h1>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/banner02.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Massively multiplayer online game.</h1>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/banner03.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Artificial Intelligence.</h1>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/banner04.webp" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1> Away from keyboard.</h1>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Welcome to the latest games platform in Sri Lanka</h2>
                        <h3 class="text-danger mt-5">Upcoming Games</h3>
                        <div class="row row-cols-1 row-cols-md-2 g-2">
                            <div class="col">
                                <div class="card">
                                    <img src="images/Farcry4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Farcry4</h5>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        Game Release Dates: Game Release Dates: August 30, 2023
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="images/Farcry4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Farcry4</h5>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        Game Release Dates: August 30, 2023
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="<?php echo $Data['image']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">The Elder Scrolls V.</h5>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        Game Release Dates: August 30, 2023
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="images/TLoZ Breath of the Wild.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">TLoZ Breath of the Wild</h5>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        Game Release Dates: August 30, 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section text-white" style="background-color: rgb(184, 57, 53);">
            <div class="container">
                <br><br>
                <h2 class="text-center">Welcome to the latest games platform in Sri Lanka</h2>
                <h3 class="mt-5">Upcoming Games</h3>
                <div class="row">
                    <div class="">
                        <table class="table align-middle fs-5 fw-bold col-sm-12 col-md-12 col-lg-12">

                            <tbody>
                                <?php
                                include 'config.php';
                                $pic = mysqli_query($connect, "SELECT * FROM `curd01` ");
                                $result = mysqli_num_rows($pic);

                                if ($result > 0) {
                                    while ($row = mysqli_fetch_array($pic)) {
                                        echo "

                            <tr>
                            <td>$row[name]</td>
                            <td>Start- $row[date]</td>
                            <td><img src='$row[image]'  width = '400px' height= '220px'></td>                                                                                                         
                            </tr>
                            ";
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customized</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
    include 'config.php';
    $ID = $_GET['id'];
    $Record = mysqli_query($connect, "SELECT * FROM `curd01` WHERE id = $ID");
    $Data = mysqli_fetch_array($Record);
    ?>


    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(8, 8, 8, 0.7)">
        <div class="container ">
            <a class="navbar-brand" href="index.html"><img src="images/gamelogo.jpg" style="width: 60px; height:60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="#about">About Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    

    <section class="img-fluid section text-white" style="height: 100vh; background-image: linear-gradient(rgba(0, 0, 0, 0.827),rgba(0, 0, 0, 0.8)) , url(images/banner01.jpeg);">>
    <br><br><br><br>
        <div class="container " style="display: flex; justify-content: center;">
            <div class="row mt-3" style="background-color:rgb(158, 177, 240);">
                <div class="col-md-12">
                    <h3 class="col-sm-10 text-center mt-2">Customized</h3>
                    <form method="POST" action="update1.php" enctype="multipart/form-data">
                        <div class="form-group row mt-3">
                            <label for="name" class="col-sm-4 col-form-label">
                                Game Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="name" value="<?php echo $Data['name']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="date" class="col-sm-4 col-form-label">
                                Game Date
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="date" name="date" value="<?php echo $Data['date']; ?>" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
                            </div>
                        </div>
                        <div class="mb-2 mt-2 ">
                            <td><input class="form-control" type="file" name="image" id="image" value="<?php echo $Data['image']; ?>"><img style="width:300px; height:200px" class="mt-3" src="<?php echo $Data['image']; ?>"></td>
                        </div>
                        <div>
                            <input type="hidden" name="id" value="<?php echo $Data['id']; ?>">
                        </div>
                        <div class="col-auto text-center">
                            <button type="submit" name="update" class="btn btn-primary mb-3">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
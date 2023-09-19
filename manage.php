<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Page</title>

    <!--Favicon-->
    <link rel="icon" href="images/gamelogo.jpg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(8, 8, 8, 0.7); ">
        <div class="container ">
            <a class="navbar-brand" ><img src="images/gamelogo.jpg" style="width: 60px; height:60px;"></a>
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
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="img-fluid section text-white" style="height: 100vh; background-image: linear-gradient(rgba(0, 0, 0, 0.827),rgba(0, 0, 0, 0.8)) , url(images/banner01.jpeg); background-repeat: repeat; height:400px;">
        <br><br><br><br>
        <div class="container " style="display: flex; justify-content: center;">
            <div class="row mt-3" style="background-color:rgb(158, 177, 240);">

                <div class="col-md-12">
                    <h3 class="col-sm-10 text-center mt-2">Add New Games</h3>
                    <form method="POST" action="insert.php" enctype="multipart/form-data">
                        <div class="form-group row mt-3">
                            <label for="name" class="col-sm-4 col-form-label">
                                Game Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="date" class="col-sm-4 col-form-label">
                                Game Date
                            </label>
                            <div class="col-sm-8">
                                <input class="form-control" type="date" name="date" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
                            </div>
                        </div>
                        <div class="mb-2 mt-2 ">
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <div class="col-auto text-center">
                            <button name="upload" class="btn btn-primary mb-3">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table align-middle col-sm-12">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">GAME NAME</th>
                                <th scope="col">GAME DATE</th>
                                <th scope="col">IMAGE</th>
                                <th scope="col">DELETE</th>
                                <th scope="col">UPDATE</th>
                            </tr>

                        </thead>
                        <tbody>

                            <?php
                            include 'config.php';
                            $pic = mysqli_query($connect, "SELECT * FROM `curd01` ");
                            $result = mysqli_num_rows($pic);

                            if ($result > 0) {
                                while ($row = mysqli_fetch_array($pic)) {
                                    echo "
                            <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[date]</td>
                            <td><img src='$row[image]'  width = '300px' height= '180px'></td>  

                            <td><a href='delete.php? id=$row[id]' class= 'btn btn-danger '>Delete</a></td>
                            <td><a href='update.php? id=$row[id]' class= 'btn btn-danger '>Update</a></td>                                                      
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

</body>

</html>
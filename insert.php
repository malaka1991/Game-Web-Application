<?php 
// include db connction

include_once 'config.php';

if (isset($_POST['upload']) ){
    $NAME = $_POST['name'];
    $DATE = $_POST['date'];
    $IMAGE = $_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = 'images/'.$img_name;
    move_uploaded_file($img_loc,'images/'.$img_name);


    
    // insert data

    $SQL = "INSERT INTO curd01(name, date, image) VALUES ('$NAME','$DATE','$img_des')";
    
    mysqli_query($connect,$SQL);

    header('location:manage.php');

    

}

?>
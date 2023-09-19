<?php 
include_once 'config.php';

if (isset($_POST['update']) ){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $DATE = $_POST['date'];
    $IMAGE = $_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = 'images/'.$img_name;
    move_uploaded_file($img_loc,'images/'.$img_name);

    $SQL = "UPDATE `curd01` SET name='$NAME',date='$DATE',image='$img_des' WHERE id =$ID";
    
    mysqli_query($connect,$SQL);

    header('location:manage.php');
}


?>
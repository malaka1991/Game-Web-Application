<?php 
include 'config.php';

$ID = $_GET['id'];

mysqli_query($connect,"DELETE FROM `curd01` WHERE id = $ID");

header('location:manage.php');
?>
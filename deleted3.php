<?php

include "config.php";
    session_start();
    error_reporting(0);

$seccion=$_GET['id'];

$sql="DELETE FROM d3  WHERE seccion='$seccion'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: dist3.php");
    }
?>


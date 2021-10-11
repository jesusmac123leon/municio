<?php

include "config.php";
    session_start();
    error_reporting(0);

$seccion=$_POST['seccion'];
$municipio=$_POST['municipio'];
$representante=$_POST['representante'];

$sql="UPDATE d8 SET  municipio='$municipio',representante='$representante' WHERE seccion='$seccion'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: dist8.php");
    }
?>


<?php

include "config.php";
    session_start();
    error_reporting(0);

$seccion=$_POST['seccion'];
$municipio=$_POST['municipio'];
$representante=$_POST['representante'];

$sql="UPDATE d2 SET  municipio='$municipio',representante='$representante' WHERE seccion='$seccion'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: dist2.php");
    }
?>


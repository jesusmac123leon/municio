<?php 
    include "config.php";
    session_start();
    error_reporting(0);

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($query);
    session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css.css">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <div class="container">
    <br>
    <h2 class="text-secondary border border-secondary border-top-0 border-left-0 border-right-0 text-center">Lista de Distritos</h2>
    
    <div class="container">
        <div class="form-group row">
            <div class="col-sm-6">
            </div>
        </div>
        <div class="form-group text-center">
            <a class="boton_personalizado" href="dist1.php">Distrito 1: San Juan Bautista del Río</a>
            <a class="boton_personalizado" href="dist2.php">Distrito 2: Teotitlán de Flores Magón</a>
        </div>
        <br>
        <div class="form-group text-center">
            <a class="boton_personalizado" href="dist3.php">Distrito 3: Heroica Ciudad de Huajuapan de León</a>
            <a class="boton_personalizado" href="dist4.php">Distrito 4: Tlacolula de Matamoros</a>
        </div>
        <br>
        <div class="form-group text-center">
            <a class="boton_personalizado" href="dist5.php">Distrito 5: Salina Cruz</a>
            <a class="boton_personalizado" href="dist6.php">Distrito 6: Heroica Ciudad de Tlaxiaco</a>
        </div>
        <br>
        <div class="form-group text-center">
            <a class="boton_personalizado" href="dist7.php">Distrito 7: Ciudad Ixtepex</a>
            <a class="boton_personalizado" href="dist8.php">Distrito 8: Oaxaca de Juárez</a>
        </div>
        <br>
        <div class="form-group text-center">
            <a class="boton_personalizado" href="dist9.php">Distrito 9: Puerto Escondido</a>
            <a class="boton_personalizado" href="dist10.php">Distrito 10: Miahuatlán de Porfirio Díaz</a>
            
        </div>
    </div>
    <br>
    <br>
    <a class="btn btn-danger regular-button" href="logout.php" role="button"> CERRAR SESIÓN </a>
</body>
</html>
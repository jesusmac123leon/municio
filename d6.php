<?php

include "config.php";
error_reporting(0);
session_start();




if(isset($_SESSION["seccion"]))
{
    header("Location: dist6.php");
}

if(isset($_POST["submit"])){
    $seccion=$_POST["seccion"];
    $municipio=$_POST["municipio"];
    $representante=$_POST["representante"];
    
    
    if($seccion==$seccion){
        $sql="SELECT * FROM d6 WHERE seccion='$seccion'";
        $result= mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
            
            $sql="INSERT INTO d6 (seccion,municipio,representante)
            VALUE ('$seccion', '$municipio', '$representante')";
            $result=mysqli_query($conn,$sql);
            
            if($result){
                echo "<script>alert('Datos registrados con éxito')</script>";
                $seccion="";
                $municipio="";
                $representante="";
                
            }else{
                echo "<script>alert('Hay un error de registro')</script>";
            }
            
            
        }else{
            echo "<script>alert('La sección que desea registrar ya existe')</script>";
        }
    }else{
            echo "<script>alert('Las contraseñas no coinciden')</script>";        
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css.css">

	<title>Formulario de registro</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
        <br>
		<br>
		<br>    
        <p class="text-center" style="font-size: 2rem; font-weight: 800;">Registro</p>
			<div class="text-center">
            <br>
		    <br>
				<input type="text" placeholder="Sección" name="seccion" value="<?php echo $seccion; ?>" required>
			</div>
			<div class="text-center">
				<input type="text" placeholder="Municipio" name="municipio" value="<?php echo $municipio; ?>" required>
			</div>
			<div class="text-center">
				<input type="text" placeholder="Representante" name="representante" value="<?php echo $representante; ?>" required>
			</div>

			<div class="text-center">
            <br>
				<button name="submit" class="btn">Ingresar Datos</button>
                <a class="btn btn-danger regular-button" href="dist6.php" role="button"> REGRESAR </a>
			</div>			
		</form>
	</div>
</body>
</html>
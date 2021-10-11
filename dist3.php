<?php 
    include "config.php";
    session_start();
    error_reporting(0);

    $sql="SELECT *  FROM d3";
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
        <title> PAGINA DE REGISTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    
            <div class="container mt-5">
                    
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Sección</th>   
                                        <th>Municipio</th>
                                        <th>Representante</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['seccion']?></th>
                                                <th><?php  echo $row['municipio']?></th>
                                                <th><?php  echo $row['representante']?></th>        
                                                <th><a href="actualizard3.php?id=<?php echo $row['seccion'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="deleted3.php?id=<?php echo $row['seccion'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                            
                        </div>
                        <br>
                        <a class="btn btn-primary regular-button" href="d3.php" role="button"> INSERTAR </a>
                        <a class="btn btn-success regular-button" href="botones.php" role="button"> REGRESAR </a>
                    </div>
                    
            </div>
            <br>
            <br>
            <a class="btn btn-danger regular-button" href="logout.php" role="button"> CERRAR SESIÓN </a>
    </body>
</html>
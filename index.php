<?php 
include "config.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: botones.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result= mysqli_query($conn, $sql);
    
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: botones.php");
    }else{
        echo "<script>alert('La contraseña o el email son incorrectos')</script>";
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

	<title>Iniciar sesión</title>
</head>
<body>
	<div class="container">
		<br>
		<br>
		<br>
		<form action="" method="POST" class="login-email">
			<p class="text-center" style="font-size: 2rem; font-weight: 800;">Iniciar Sesión</p>
			<div class="text-center">
			<br>
			<br>	
			<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="text-center">
				<input type="password" placeholder="Contraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<br>
			<div class="text-center">
				<button name="submit" class="btn">Acceder</button>
			</div>
			<br>
			<br>
			<p class="text-center">¿No tienes cuenta? <a href="register.php">Regístrate aquí</a>.</p>
		</form>
	</div>
</body>
</html>
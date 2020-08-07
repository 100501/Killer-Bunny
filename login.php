<?php
$server = 'localhost';
$user = 'root';
$passwordd = '';
$BD = 'KillerBunnyDB';


$email = $_POST['email'];
$password = $_POST['password'];
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
$conn = mysqli_connect($server, $user , $passwordd, $BD );
	
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
  
  // Consulta segura para evitar inyecciones SQL.
  $consultaSQL = "SELECT * FROM users WHERE user_name = "' . $email . '" AND user_password = "' . $password . "';
   $resultado = $conn->query($sql);
  
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
	// Guardo en la sesión el email del usuario.
	$_SESSION['email'] = $email;
	
	// Redirecciono al usuario a la página principal del sitio.
	header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: index.php"); 
  }else{
	echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }

?>
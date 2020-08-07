<?php
/*
$server = 'SQL5053.site4now.net';
$user = 'DB_A56B37_killerbunny_admin';
$password = 'dyde1234';
$BD = 'DB_A56B37_killerbunny_admin';
*/

$server = 'localhost';
$user = 'root';
$password = '';
$BD = 'KillerBunnyDB';



//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
$conexion = mysqli_connect($server, $user , $password, $BD );
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
    }
    

    $NOMBRES = $_POST["nombre"];
    $APELLIDOS = $_POST["apellidos"];    
    $TELEFONO = $_POST["telefono"];
    $DIRECCION = $_POST["direccion"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $email = $_POST["email"];


    $sql = "INSERT INTO clientes (NOMBRES, APELLIDOS, TELEFONO, DIRECCION, usuario, contraseña, email) 
    VALUES ('$NOMBRES', '$APELLIDOS', '$TELEFONO', '$DIRECCION', '$usuario', '$contrasena', '$email')";


    if (mysqli_query($conexion, $sql)) {
      echo "Registro guardado";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    
mysqli_close($conexion);
header('location: login.html')

?>


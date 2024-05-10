<?php


session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $usuario_datos = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $usuario_datos['usuario'];
    $_SESSION['nombre_completo'] = $usuario_datos['nombre_completo'];
    $_SESSION['correo'] = $usuario_datos['correo'];

    header("location: ../bienvenida.php");
    exit;
}else{
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit;
}

?>
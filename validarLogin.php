<?php
    include("conexion_db.php");
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    session_start();
    $_SESSION['usuario'] = $usuario;
    $consulta = "SELECT * FROM usuarios WHERE email = '$usuario' AND contraseña = '$password'"; 
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("Location: inicio.php");
    }else{
        header("Location: errorLogin.php");
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>

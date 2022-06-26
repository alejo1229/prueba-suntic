<?php
    include("conexion_db.php");
   
    $codigo = $_POST["codigo"];
    $codigo = $_POST["codigo_db"];
    $identificacion = $_POST["identificacion"];
   /*  var_dump($codigo);
    var_dump($codigo_db);
    var_dump($identificacion); */
    $consulta = "UPDATE usuarios SET estado = 'ok' WHERE identificacion = '$identificacion'";
    $resultado = mysqli_query($conexion,$consulta);

/*
    $select = "SELECT * FROM usuarios WHERE identificacion = '$identificacion'";

    $resulselect = mysqli_query($conexion,$select);
    $fila = mysqli_fetch_assoc($resulselect);

    $codigo_db = $fila["codigo"];
    if($codigo == ''){
        echo "<p>eror</p>";
    }
    else if($codigo == $codigo_db){
        $consulta = "UPDATE usuarios SET estado = 'ok' WHERE identificacion = '$identificacion'";
        $resultado = mysqli_query($conexion,$consulta);
        echo "<p>bien</p>";
    }
    else if($codigo != $codigo_db){
        echo "error fuera";
    }



?>
   

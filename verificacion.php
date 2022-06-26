
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./static/css/verificacion.css">
<?php
    $identificacion = $_REQUEST["id"];
    include("conexion_db.php");

    $consulta = "SELECT * FROM usuarios WHERE identificacion = '$identificacion'";
    $resultado = mysqli_query($conexion,$consulta);
    $fila = mysqli_fetch_assoc($resultado);
    $codigo = (int)$fila["codigo"]; 
    $email = $fila["email"];

?>

<div class="container" style="display:flex;justify-content: center;align-items: center;height: 100vh;">
    <div class="content" style="width: 400px;padding: 10px; background-color: #0f0f3e;    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;height:300px;">

        <h1 style="color:white;font-size:25px;text-align:center;font-family: 'Questrial', sans-serif;">Te hemos enviado un código a: <?= $email ?></h1>
        <input class="codigo_db" type="hidden" value="<?= $codigo ?>" name="">
<!--         <form action="validarCodigo.php" method="post" class="formulario">
 -->        <h3 style="color:white;font-family: 'Questrial', sans-serif;">Ingresa el código aquí</h3>
            <input type="number" name="codigo" class="codigo" style="width:300px;margin-bottom:5px;height:30px;">
            <input type="hidden" class="identificacion" name="id" value="<?= $identificacion ?>">
            <input type="submit" class="enviar" name="enviar" value="Enviar" style="width:300px;font-family: 'Questrial', sans-serif;height:30px;    background: #6767b7;
    color: white;
    font-weight: bold;
    border: none;">
<!--         </form>
 -->        
    </div>
</div>

<script>

    $(".enviar").click(function(){
        const codigo = $(".codigo").val();
        const codigo_db = $(".codigo_db").val();
        const identificacion = $(".identificacion").val();
        console.log("cod: "+ codigo," cod_db : "+  codigo_db,"id: " + identificacion);
        if(codigo === ''){
            alert("Por favor ingrese su código");
        }else if(codigo != codigo_db){
            alert("El codigo es incorrecto");
        }else if(codigo === codigo_db){
            $.ajax({
                type: "post",
                url: 'validarCodigo.php',
                data: {
                    "identificacion" : identificacion,
                    "codigo": codigo,
                    "codigo_db": codigo_db
                },
                success: function(r)
                {
                    alert("Autenticado");
                }
            });
        }
});


    
</script>


<?php

            require 'Exception.php';
            require 'PHPMailer.php';
            require 'SMTP.php';
            
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;


    include("conexion_db.php");

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $tipo = $_POST["tipo"];
    $identificacion = $_POST["identificacion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $recorreo = $_POST["recorreo"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $codigo = mt_rand(1000,9999);
    $consulta = "INSERT INTO usuarios(nombre, apellido, tipo_identificacion, identificacion, telefono, email, contraseña, codigo) VALUES ('$nombre','$apellidos','$tipo','$identificacion','$telefono','$correo','$password','$codigo')";

    if($correo === $recorreo && $password === $repassword){
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
  
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'suntic.prueba@gmail.com';                     //SMTP username
    $mail->Password   = 'metccwwmlgocezxv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('suntic.prueba@gmail.com', 'Suntic prueba');
    $mail->addAddress($correo, $nombre . ' ' . $apellidos);     //Add a recipient
 
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Prueba Suntic - Alejandro Ortega';
    $mail->Body    = 'Tu código de verificación es: <b>'. $codigo .'</b>';
    $mail->AltBody = 'Código de verificación';

    $mail->send();
    header("Location: verificacion.php/?id=".$identificacion);
    ?>
    <?php
     
        } catch (Exception $e) {
            echo "Error: {$mail->ErrorInfo}"; 
        }
    ?>

<?php
   
    }else{
        echo "<h1>Error</h1>";
    }
    }else{
        echo "<h1>error</h1>";
    }

?>

<link rel="stylesheet" href="./static/css/registro.css">

<div class="content">
    <div class="formulario">
        <h1>Registro</h1>
        <form action="validarRegistro.php" method="post">
            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" placeholder="Ingrese su(s) apellido(s)" required>
            <label for="">Tipo de identificación</label>
            <select name="tipo" id="" required>
                <option value="" selected disabled>Seleccione un tipo</option>
                <option value="tarjeta de identidad">Tarjeta de identidad</option>
                <option value="cedula ciudadania">Cedula de ciudadania</option>
                <option value="cedula extranjeria">Cedula de extrajeria</option>
                <option value="pasaporte">Pasaporte</option>
            </select>
            <label for="">Número de identificación</label>
            <input type="number" name="identificacion" placeholder="Ingrese su número de identificación" required>
            <label for="">Número fijo o móvil</label>
            <input type="number" name="telefono" placeholder="Ingrese su número fijo o móvil" required>
            <label for="">Correo electrónico</label>
            <input type="email" name="correo" placeholder="Ingrese su correo electrónico" required>
            <label for="">Confirmar correo electrónico</label>
            <input type="email" name="recorreo" placeholder="Ingrese nuevamente su correo electrónico" required>
            <label for="">Contraseña</label>
            <input type="password" name="password" placeholder="Ingrese su contraseña" required>
            <label for="">Confirmar contraseña</label>
            <input type="password" name="repassword" placeholder="Ingrese nuevamente su contraseña" required>
            <div class="" style="display:flex">
                <input type="checkbox" name="" id="" required>
                <p>Acepto terminos y condiciones</p>
            </div>
            <input type="submit" class="" value="Registrarse">
        </form> 
    </div>
</div>
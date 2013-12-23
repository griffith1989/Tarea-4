<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/style.css">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://localhost/ISW_Bolsa_de_Trabajo/js/script_inicio.js"></script>
</head>
<body>
    <div id="encabezado">
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url()?>proyecto_isw/ver_inicio">Inicio</a></li>
                    <li><a href="<?php echo base_url()?>proyecto_isw/ver_crear">Crear</a></li>
                    <li><a href="<?php echo base_url()?>proyecto_isw/ver_ver">Ver</a></li>
                    <li><a href="<?php echo base_url()?>proyecto_isw/ver_modificar">Modificar</a></li>
                    <li><a href="<?php echo base_url()?>proyecto_isw/ver_eliminar">Eliminar</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div id="texto">
                <?= form_open(base_url()."proyecto_isw/crear") ?>
                  <?php
                    $usuario = array(
                        'name' => 'usuario',
                        'Placeholder' => 'Usuario'
                    );
                    $pass = array(
                        'name' => 'pass',
                        'Placeholder' => 'Contraseña',
                        'type' => 'password'
                    );
                    $nombre1 = array(
                        'name' => 'nombre1',
                        'Placeholder' => 'Nombre'
                    );
                    $nombre2 = array(
                        'name' => 'nombre2',
                        'Placeholder' => 'Nombre'
                    );
                    $apellido1 = array(
                        'name' => 'apellido1',
                        'Placeholder' => 'Apellido'
                    );
                    $apellido2 = array(
                        'name' => 'apellido2',
                        'Placeholder' => 'Apellido'
                    );
                    $rut = array(
                        'name' => 'rut',
                        'Placeholder' => 'Rut'
                    );
                    $correo = array(
                        'name' => 'correo',
                        'Placeholder' => 'E-Mail',
                        'type' => 'email'
                    );
                    $cargo = array(
                        'name' => 'cargo',
                        'Placeholder' => 'Cargo'
                    );
                    $sexo = 'sexo';
                    $opciones = array(
                        'TRUE' => 'Masculino',
                        'FALSE' => 'Femenino'
                    );
                    $comuna = array(
                        'name' => 'comuna',
                        'Placeholder' => 'Comuna'
                    );
                    $direccion = array(
                        'name' => 'direccion',
                        'Placeholder' => 'Direccion'
                    );
                    $fecha = array(
                        'name' => 'fecha',
                        'Placeholder' => 'Fecha de Nacimiento',
                        'type' => 'date'
                    );
                    $telefono1 = array(
                        'name' => 'telefono1',
                        'Placeholder' => 'Primer Telefono'
                    );
                    $telefono2 = array(
                        'name' => 'telefono2',
                        'Placeholder' => 'Segundo Telefono'
                    );
                ?>
                    <?= form_label('Usuario','usuario')?>
                    <?= form_input($usuario)?>
                    <?= form_label('Contraseña','pass')?>
                    <?= form_input($pass)?>
                    <?= form_label('Rut','rut')?>
                    <?= form_input($rut)?>
                    <?= form_label('Primer Nombre','nombre1')?>
                    <?= form_input($nombre1)?>
                    <?= form_label('Segundo Nombre','nombre2')?>
                    <?= form_input($nombre2)?>
                    <?= form_label('Primer Apellido','apellido1')?>
                    <?= form_input($apellido1)?>
                    <?= form_label('Segundo Apellido','apellido2')?>
                    <?= form_input($apellido2)?>
                    <?= form_label('Primer Telefono','telefono1')?>
                    <?= form_input($telefono1)?>
                    <?= form_label('Segundo Telefono','telefono2')?>
                    <?= form_input($telefono2)?>
                    <?= form_label('E-Mail','correo')?>
                    <?= form_input($correo)?>
                    <?= form_label('Cargo en la Universidad','cargo')?>
                    <?= form_input($cargo)?>
                    <?= form_label('Género','sexo')?>
                    <?= form_dropdown($sexo,$opciones)?>
                    <?= form_label('Comuna','comuna')?>
                    <?= form_input($comuna)?>
                    <?= form_label('Direccion','direccion')?>
                    <?= form_input($direccion)?>
                    <?= form_label('Fecha de Nacimiento','fecha')?>
                    <?= form_input($fecha)?>
                    <?= form_submit('login_entrar','Aceptar')?>
                <?= form_close()?>
            </div>
        </section>
    </div>
</body>
</html>

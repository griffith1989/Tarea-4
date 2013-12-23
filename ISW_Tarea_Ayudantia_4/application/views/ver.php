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
                <h1> UTEM Ayudantia Tarea 4 </h1>
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
                <?= form_open(base_url()."proyecto_isw/index") ?>
                  <?php
                    $usuario = array(
                        'name' => 'usuario'
                    );
                ?>
                    <?= form_label('Usuario','usuario')?>
                    <?= form_input($usuario)?>
                    <?= form_submit('login_entrar','Aceptar')?>
                <?= form_close()?>
                
                
            </div>
        </section>
    </div>
</body>
</html>

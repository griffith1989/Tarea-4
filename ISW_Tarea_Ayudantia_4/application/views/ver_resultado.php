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
                <p>
                <?php 
                    foreach($query as $query){ 
                        echo 'Id: '.$query-> Id_Administrador.'<br/>';
                        echo 'Usuario: '.$query-> Usuario.'<br/>';
                        echo 'Contraseña: '.$query-> Contrasenia.'<br/>';
                        echo 'Género: ';
                        if($query-> Usuario == TRUE) {
                            echo 'Masculino'.'<br/>';
                        }
                        else {
                            echo 'Femenino'.'<br/>';
                        }
                        echo 'Rut: '.$query-> Rut.'<br/>';
                        echo 'Primer Nombre: '.$query->Nombre1.'<br/>';
                        echo 'Segundo Nombre: '.$query->Nombre2.'<br/>';
                        echo 'Primer Apellido: '.$query->Apellido1.'<br/>';
                        echo 'Segundo Apellido: '.$query->Apellido2.'<br/>';
                        echo 'Primer Telefono: '.$query-> Telefono1.'<br/>';
                        echo 'Segundo Telefono: '.$query-> Telefono2.'<br/>';
                        echo 'Cargo en la Universidad: '.$query-> Cargo.'<br/>';
                        echo 'E-Mail: '.$query-> Correo.'<br/>';
                        echo 'Comuna: '.$query-> Comuna.'<br/>';
                        echo 'direccion: '.$query-> Direccion.'<br/>';
                        echo 'Fecha de Nacimiento: '.$query-> Fecha_Nacimiento.'<br/>';
                    }
                    ?>
                </p>
                
                
            </div>
        </section>
    </div>
</body>
</html>

<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y 
un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php 
que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de 
inicio debe tener un link que permita cerrar la sesión del usuario.
*/

$Usuario = $_POST['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inicio</h1>
    <div>

    <?php 
    echo 'bienvenido '.strtoupper($_POST['usuario'])
    ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Bienvenido a la Clinica Dolores</h1>
    <?php
        require_once "autoloader.php";
        require_once "./config/config.php";

        use Lib\BaseDatos;

        $db= new BaseDatos();
    ?>

    <h2>He conectado con la base de datos</h2>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <h1>Bienvenido a la Clinica Dolores</h1>
    <?php
        require_once "autoloader.php";
        require_once './config/config.php';
        use Lib\BaseDatos;

        $db=new BaseDatos();

    ?>

    <h1>MIS PACIENTES</h1>

    <?php
        $db->consulta("SELECT * FROM pacientes");
        while ($fila= $db->extraer_registro()) {
            foreach ($fila as $campo=> $valor) {
                echo "$campo: $valor <br><br>";
            }
        }
    ?>
    
</body>
</html>
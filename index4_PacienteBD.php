<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
        require_once 'autoloader.php';
        require_once './config/config.php';
        use models\Paciente;    
    ?>
    
    <h2>MIS PACIENTES</h2>

    <?php
        $patient= new Paciente;
        $mispacientes= $patient->getAll();
        
        foreach ($mispacientes as $fila) {
            foreach ($fila as $campo=> $valor) {
                echo "$campo: $valor <br><br>";
            }
        }
    ?>
    
</body>
</html>
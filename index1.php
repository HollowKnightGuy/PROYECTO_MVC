<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
</head>
<body>
    <h1>Bienvenido a la Clinica Dolores</h1>
    <?php
        require_once 'models/doctor.php';
        use Models\Doctor;

        $sudoctor=new Doctor('4','Ricardo','Solano','958121212','reumatología');
        $nombre=$sudoctor->getNombre();

        echo "Es paciente del doctor $nombre";
    ?>
</body>
</html>
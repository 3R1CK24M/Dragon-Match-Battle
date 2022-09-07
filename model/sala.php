<?php
include "../controllers/conexion.php";
$sentencia_select = $conn->prepare('SELECT * FROM cartas order by rand() limit 8;');
$sentencia_select->execute();
$resultado = $sentencia_select->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala</title>
    <link rel="stylesheet" href="../views/sala.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <div class="carta">
        <tr>
            <th>Grupo</th>
            <th>Nombre</th>
            <th>Poder</th>
            <th>Velocidad</th>
            <th>Alcance</th>
            <th>Tecnica</th>
            <th>Energia</th>
        </tr>
        <?php foreach ($resultado as $cartas) : ?>
        <tr>
            <td><?php  echo $cartas['grupo']?></td>
            <td><?php  echo $cartas['nombre']?></td>
            <td><?php  echo $cartas['poder']?></td>
            <td><?php  echo $cartas['velocidad']?></td>
            <td><?php  echo $cartas['alcence']?></td>
            <td><?php  echo $cartas['tecnica']?></td>
            <td><?php  echo $cartas['energia']?></td>
        </tr>
        <?php endforeach; ?>
    </div>
    <div class="carta2">

    </div>
    <div class="carta3">

    </div>
    <div class="carta4">

    </div>
</body>
</html>
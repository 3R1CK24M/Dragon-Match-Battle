<?php
    include "../controllers/conexion.php";
    $cartas1= "SELECT DISTINCT * FROM cartas order by rand() limit 1";
    $cartas2= "SELECT DISTINCT * FROM cartas order by rand() limit 1";
    $cartas3= "SELECT DISTINCT * FROM cartas order by rand() limit 1";
    $cartas4= "SELECT DISTINCT * FROM cartas order by rand() limit 1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala</title>
    <link rel="stylesheet" href="../model/sala.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <a href="../index.php" type="submit"name="guardar" id="guardar" class="btn btn-info">Salir</a>
    <div class="container">
    
        <div class="carta">
            <td><?php $resultado = mysqli_query($conn, $cartas1);
                while($row= mysqli_fetch_assoc($resultado)) {
                ?>
            </td>   
            <section class="title">
            <h2><?php  echo $row['grupo']?></h2>
            </section>
            <img src="../obj/dbll.png" alt="DragonBallZ"> 
            <div class="datos">
            <table class="table">
                    <thead>
                    <tr>
                        <th>Datos</th>
                        <th>Estadisticas</th>
                    </tr>  
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td><?php  echo $row['nombre']?></td>
                        </tr>
                        <tr>
                            <td>Poder</td>   
                            <td><?php  echo $row['poder']?></td>
                        </tr>
                        <tr>
                            <td>Velocidad</td>
                            <td><?php  echo $row['velocidad']?></td>
                        </tr>
                        <tr>
                            <td>Alcance</td>
                            <td><?php  echo $row['alcance']?></td>
                        </tr>
                        <tr>
                            <td>Tecnica</td>
                            <td><?php  echo $row['tecnica']?></td>
                        </tr>
                        <tr>
                            <td>Energia</td>
                            <td><?php  echo $row['energia']?></td>
                        </tr>                       
                    </tbody>             
                <?php }?>
                </table>
                
            </div>
        </div>
        <div class="carta">
        <td><?php $resultado = mysqli_query($conn, $cartas1);
                while($row= mysqli_fetch_assoc($resultado)) {
                ?>
            </td> 
            <section class="title">
            <h2><?php  echo $row['grupo']?></h2>
            </section>
            <img src="../obj/dbll.png" alt="DragonBallZ"> 
            <div class="datos">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Datos</th>
                        <th>Estadisticas</th>
                    </tr>  
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td><?php  echo $row['nombre']?></td>
                        </tr>
                        <tr>
                            <td>Poder</td>   
                            <td><?php  echo $row['poder']?></td>
                        </tr>
                        <tr>
                            <td>Velocidad</td>
                            <td><?php  echo $row['velocidad']?></td>
                        </tr>
                        <tr>
                            <td>Alcance</td>
                            <td><?php  echo $row['alcance']?></td>
                        </tr>
                        <tr>
                            <td>Tecnica</td>
                            <td><?php  echo $row['tecnica']?></td>
                        </tr>
                        <tr>
                            <td>Energia</td>
                            <td><?php  echo $row['energia']?></td>
                        </tr>                       
                    </tbody>  
                <?php }?>
                </table>      
            </div>
        </div>
        <div class="carta">
            <td><?php $resultado = mysqli_query($conn, $cartas1);
                while($row= mysqli_fetch_assoc($resultado)) {
                ?>
            </td> 
            <section class="title">
            <h2><?php  echo $row['grupo']?></h2>
            </section>
            <img src="../obj/dbll.png" alt="DragonBallZ"> 
            <div class="datos">
            <table class="table">
                    <thead>
                    <tr>
                        <th>Datos</th>
                        <th>Estadisticas</th>
                    </tr>  
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td><?php  echo $row['nombre']?></td>
                        </tr>
                        <tr>
                            <td>Poder</td>   
                            <td><?php  echo $row['poder']?></td>
                        </tr>
                        <tr>
                            <td>Velocidad</td>
                            <td><?php  echo $row['velocidad']?></td>
                        </tr>
                        <tr>
                            <td>Alcance</td>
                            <td><?php  echo $row['alcance']?></td>
                        </tr>
                        <tr>
                            <td>Tecnica</td>
                            <td><?php  echo $row['tecnica']?></td>
                        </tr>
                        <tr>
                            <td>Energia</td>
                            <td><?php  echo $row['energia']?></td>
                        </tr>                       
                    </tbody>
                <?php }?>
                </table>
            </div>
        </div>
        <div class="carta">
            <td><?php $resultado = mysqli_query($conn, $cartas1);
                while($row= mysqli_fetch_assoc($resultado)) {
                ?>
            </td> 
            <section class="title">
            <h2><?php  echo $row['grupo']?></h2>
            </section>
            <img src="../obj/dbll.png" alt="DragonBallZ"> 
            <div class="datos">
            <table class="table">
                    <thead>
                    <tr>
                        <th>Datos</th>
                        <th>Estadisticas</th>
                    </tr>  
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td><?php  echo $row['nombre']?></td>
                        </tr>
                        <tr>
                            <td>Poder</td>   
                            <td><?php  echo $row['poder']?></td>
                        </tr>
                        <tr>
                            <td>Velocidad</td>
                            <td><?php  echo $row['velocidad']?></td>
                        </tr>
                        <tr>
                            <td>Alcance</td>
                            <td><?php  echo $row['alcance']?></td>
                        </tr>
                        <tr>
                            <td>Tecnica</td>
                            <td><?php  echo $row['tecnica']?></td>
                        </tr>
                        <tr>
                            <td>Energia</td>
                            <td><?php  echo $row['energia']?></td>
                        </tr>                       
                    </tbody>
                <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
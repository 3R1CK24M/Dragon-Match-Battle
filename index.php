<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ensayo</title>
    <link href="model/estilos.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Dragon Match Battle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                <a class="nav-link" href="views/reglas.html">Reglas</a>
                </li>
            </ul>
            <span class="navbar-text">
                Sé el piloto de tu propio destino
            </span>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="form">
            <h1 class="titulo">Ingreso</h1>
            <form method="POST">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="Ingrese su nombre aqui" id="name" name="name">
                    <label for="floatingTextarea">Ingresa tu nick</label>
                </div>  
                <div class="codigo">
                    <input type="text" class="form-control" placeholder="Introducir codigo " id="cod" name="cod">
                </div>
                <div class="elboton">
                    <button type="submit"name="gsala" id="gsala" class="btn btn-info">Entrar</button>
                    <a href="views/sala.php" type="submit"name="guardar" id="guardar" class="btn btn-info">Crear sala</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
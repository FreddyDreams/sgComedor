<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sgComedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="#">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/2555/2555794.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                sgComedor
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="adminv1.php?navclick=HOME">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminv1.php?navclick=REGISTROS">Registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Invitados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Proximamente</a>
                </li>
            </ul>
            </div>
        </div>
        <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
    </nav>
    <br>
    <h3>MODULO INVITADOS</h3>
    <div class="container">
    <form action="adminv1.php?navclick=INVITADOS" method="post">
        <div class="card">
            <div class="card-header">
                <h5>Datos de Invitado</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <span class="input-group-text">DNI/Codigo:</span>
                            <input type="text" class="form-control" name="codigo" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Desde:</span>
                            <input type="date" class="form-control" name="fechaini" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Hasta:</span>
                            <input type="date" class="form-control" name="fechafin" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nombre">Apellidos y Nombres:</label>
                        <input type="text" id="nombre" class="form-control" name="nombre" required>
                    </div>
                    <div class="col">
                        <label for="empresa">Empresa:</label>
                        <input type="text" id="empresa" class="form-control" name="empresa">
                    </div>
                    <div class="col">
                        <label for="unidad">Unidad:</label>
                        <input type="text" id="unidad" class="form-control" name="unidad">
                    </div>
                </div>
                </br>
                <button type="submit" class="btn btn-primary">Registrar Nuevo</button>
            </div>
        </div>
    </form>
    </div>

    <br>
    <div class="container">
        <nav class="navbar navbar-light justify-content-between" style="background-color: #e3f2fd;">
            <div class="row">
                <div class="col">
                    <h5>Lista de Invitados</h5>
                </div>
<!--            <div class="col">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="DNI/Codigo">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button">Buscar</button>
                        </div>
                    </div> 
                </div> -->
            </div>
        </nav>
    </div>

</body>
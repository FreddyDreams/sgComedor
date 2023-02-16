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
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminv1.php?navclick=REGISTROS">Registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminv1.php?navclick=INVITADOS">Invitados</a>
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
    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="adminv1.php?navclick=REGISTROS" method="post">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reporte Comedor</h5>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Desde:</span>
                        <input type="date" class="form-control" name="inicial">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Hasta:</span>
                        <input type="date" class="form-control" name="final">
                    </div>
                    <button type="submit" class="btn btn-primary">Ir a Reporte</button>
                </div>
            </div>
            </form>
        </div>
        <div class="col-sm-4">
            <form action="adminv1.php?navclick=INVITADOS" method="post">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Invitados de hoy</h5>
                    <table class="table" style="font-size: 11px;">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Ir a Invitados</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <br>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AppComedor</title>
    <link rel="shortcut icon" href="#">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/2555/2555794.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                AppComedor
            </a>
        </div>
    </nav>

    <style>
        .form2x{
            font-size: 2rem;
            width: 100%;
            border: 4px solid darkblue;
        }
        .img1fix{
            max-width: 1024px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .btn-tecla {
            padding: 0.5rem 1rem;
            font-size: 1.5rem;
            font-weight: bold;
            border-radius: 0.3rem;
        }
    </style>
    <br>
    <div class="row">
        <div class="col-4">
        <div class="card border-primary mb-3 mx-auto" style="max-width: 18rem;">
                    <div class="card-header">
                        <h5 class="card-title">Bienvenido</h5>
                        <p class="card-text">Ingrese su codigo de trabajador:</p>
                    </div>
                    <div class="card-body text-primary">
                        <input id="codigo" class="form2x" type="text" placeholder="use teclado tactil">
                    </div>
                </div>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <div class="d-grid gap-2">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key7" type="button" class="btn btn-primary btn-tecla">7</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key4" type="button" class="btn btn-primary btn-tecla">4</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key1" type="button" class="btn btn-primary btn-tecla">1</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="keyCE" type="button" class="btn btn-secondary btn-tecla">CE</button>
                        </div>
                    </div>
                </div>
                <div class="p-0 col">
                    <div class="d-grid gap-2">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key8" type="button" class="btn btn-primary btn-tecla">8</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key5" type="button" class="btn btn-primary btn-tecla">5</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key2" type="button" class="btn btn-primary btn-tecla">2</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key0" type="button" class="btn btn-primary btn-tecla">0</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key9" type="button" class="btn btn-primary btn-tecla">9</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key6" type="button" class="btn btn-primary btn-tecla">6</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="key3" type="button" class="btn btn-primary btn-tecla">3</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button id="btnSend" type="button" class="btn btn-secondary btn-tecla">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
            <img class="img-fluid" src="img/logodreams.png">
            </div>
        </div>
    </div>
    <br><br>
    <nav class="row">
        <img class="img1fix" src="img/menu.png">
    </nav>

    <script type="text/javascript" src="js/presionaKEY.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>

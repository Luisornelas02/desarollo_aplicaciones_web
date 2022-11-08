<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de web con bases de datos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input type="number" class="form-control" name="edad" placeholder="Teclea la edad">
                    </div>

                    <div class="form-group">
                        <input type="radio" name="sexo" value="1"> Masculino <br>
                        <input type="radio" name="sexo" value="0"> Femenino
                    </div>

                    <div class="form-group">
                        <label for="">Domicilio:</label>
                        <textarea name="domicilio" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>

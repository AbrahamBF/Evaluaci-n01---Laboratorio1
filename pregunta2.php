<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Respuesta Ejercicio 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4><center>Bienvenido</center></h4></div>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_POST['enviar'])){
                                $nombreapellido = $_POST['nombreapellido'];
                                $direccion = $_POST['direccion'];
                                $email = $_POST['email'];
                                $edad = $_POST['edad'];

                                echo '<p><strong>¡Hola ' . $nombreapellido . '!</strong></p>';
                                echo '<p>Tu dirección es ' . $direccion . '</p>';
                                echo '<p>Tienes ' . $edad . ' años y tu correo es ' . $email . '</p>';
                            } else {
                                echo '<p>No se han recibido datos del formulario.</p>';
                            }
                        ?>
                        <a href="pregunta2.html" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
         </div>
    </div>
</body>
</html>

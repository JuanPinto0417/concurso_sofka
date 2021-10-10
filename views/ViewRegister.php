<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/a4a6364b6a.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scrollreveal.js"></script>
    <title>Juego Preguntas</title>
</head>

<body class="">
    <div class="container-fluid">

        <header class="row">

            <div class="col-md-12 bg-dark text-white p-3 shadow">
                <p class="menu d-flex justify-content-end">Juego Preguntas</p>
            </div>
        </header>

        <main class="row  d-flex justify-content-center d-flex  align-items-center">
            <form action="../controller/ControllerRegister.php" method="POST"
                class="animation-bottom col-md-4 text-center shadow-lg p-4 rounded border">
                <label class="h2" for="">Registrarse</label>

                <?php
                if (empty($message) == false) {

                    echo "<div class='alert alert-warning alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Mensaje</strong> " . $message . "</div>";
                }
                ?>

                <input class=" form-control p-2 my-2" type="text" name="full_name" placeholder="Nombre completo"
                    required pattern="[Aa-Zz]">

                <input class=" form-control p-2 my-2" type="text" name="nick_name" placeholder="Nombre de jugador"
                    required pattern="[Aa-Zz]">

                <button class="animation-top btn btn-primary mt-1" name="register" type="submit">Registrar</button>
                <button class="animation-top btn btn-danger mt-1" type="reset"> <i class="fas fa-trash"></i></button>

                <div class="row mt-3">
                    <div class="col-md-12 text-right">
                        <a class="size-text" href="ControllerLogin.php">Ya estoy registrado</a>
                    </div>
                </div>
            </form>
        </main>

        <footer>

        </footer>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script src="../assets/js/main.js"></script>


</body>

</html>
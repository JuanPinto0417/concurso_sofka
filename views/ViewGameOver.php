<?php
if (isset($_SESSION['user'])) {
?>
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

        <main class="row  d-flex justify-content-center align-items-center">

            <div action="ControllerAnswer.php" method="post" class="col-10 border shadow-lg rounded">

            <div class="  row border-bottom shadow-lg bg-dark text-white rounded">
                <label for="" class="h4 animation-bottom col-7 m-2">
                Tu Resultado
                </label>

                <label for="" class=" animation-bottom col-2 m-2 ">
                    <p class=" p-3 m-0">Nivel:
                        <?php
                                echo "<label class='text-success'>".$_SESSION['nivel']."</label>";
                         ?>
                    </p>
                </label>

                <label for="" class=" animation-bottom col-2 m-2 ">
                    <p class="  p-3 m-0"> Puntos:
                        <?php
                            echo "<label class='text-success'>".$_SESSION['total']."</label>";
                            ?>
                    </p>
                </label>

            </div>
            
            <div class="row">
                <div class="col-md-12 p-5 h5">
                    <?php
                        echo 'Jugador ' ."<label class='text-success'>".$_SESSION['user']."</label>" . ' Su puntaje fue de ' . "<label class='text-success'>".$_SESSION['total']."</label>" .
                        ' por esa razón hoy se encuentra en el nivel ' . "<label class='text-success'>".$_SESSION['nivel']."</label>";
                    ;?>
                </div>

                <div class="row col-md-12 border-top ">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="ControllerLogin.php">
                            <button class="focus-botones btn btn-danger m-3 " name=item_finish>Regresar</button>
                        </a>
                    </div>
                </div>
            </div>

                

            </div>

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

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
} else {
    header("location: ViewLogin.php");
}
?>
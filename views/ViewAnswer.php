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

        <main class="row  d-flex justify-content-center d-flex  align-items-center">

            <form action="ControllerAnswer.php" method="post" class="col-10 border shadow-lg rounded">

                <div class="  row border-bottom shadow-lg bg-dark text-white rounded">
                    <label for="" class=" animation-bottom col-7 m-2">
                        <?php
                            echo "<p class=' h4 p-3'>" . $message[0]["pregunta"] . "</p>";
                            ?>
                    </label>

                    <label for="" class=" animation-bottom col-2 m-2 ">
                        <p class=" p-3 m-0">Nivel:
                            <?php
                                echo "<label class='text-success'>" . $_SESSION['nivel'] . "</label>";
                                ?>
                        </p>
                    </label>

                    <label for="" class=" animation-bottom col-2 m-2 ">
                        <p class="  p-3 m-0"> Puntos:
                            <?php
                                if (isset($_POST['item_answer'])) {
                                    echo $_SESSION['total'] = $prize[0]["name"] + $_SESSION['total'];
                                } ?>
                        </p>
                    </label>
                </div>


                <div class="row ml-3 mt-3 d-flex animation-respuestas">
                    <!-- Esto se debe generar auto con php  -->
                    <?php
                        foreach ($answers as $answer) {
                            echo '<div class="focus-respuestas col-md-12 p-2">
                        <input type="radio"  name="answer" id="answer" for="answer" value=' . $answer['calificacion'] . '>
                        <label for="answer" class=""
                        id=""> <p class="" >' . $answer['respuesta'] . '</p></label>
                        </div>';
                        }
                        ?>

                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button class="focus-botones btn btn-success m-3" name=item_answer>Responder</button>
                        <button class="focus-botones btn btn-danger m-3 " name=item_finish>Abandonar</button>
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
<?php
} else {
    header("location: ViewLogin.php");
}
?>
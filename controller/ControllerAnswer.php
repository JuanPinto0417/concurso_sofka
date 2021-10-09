<?php
include '../models/contentdao.php';
session_start();
/* Interaccion entre la vista con la base de datos */
/* Se prepara la pregunta aleatoria y las 4 opciones de respuesta de ella al final se muestra en ViewAnswer */
if (!isset($_POST['item_answer'])) {
    $nivel = "1";
    $dao = new ContentDao();
    $message = $dao->viewQuestion($nivel);
    $id_pregunta = $message[0]["id_pregunta"];
    $answers = $dao->viewAnswer($id_pregunta);
    $num = (int)$answers[0]["id_premios"];
    $prize = $dao->prize($num);
}

if (isset($_POST['item_answer'])) {
    $_SESSION['nivel'] += 1;
    $answer = htmlspecialchars($_POST['answer']); //si la respuesta es verdadera pasa al siguiente nivel
    if ($_SESSION['nivel'] <= 5) {
        if ($answer == 'v') {
            $dao = new ContentDao();
            $message = $dao->viewQuestion($_SESSION['nivel']);
            $id_pregunta = $message[0]["id_pregunta"];
            $answers = $dao->viewAnswer($id_pregunta);
            $prize = $dao->prize($answers[0]["id_premios"]);
        } elseif ($answer == 'f') {
            header('location: ControllerGameOver.php');
        }
    } else {
        header('location: ControllerGameOver.php'); //Al terminar el juego con las 5 categ se termina el juego
    }
}
if (isset($_POST['item_finish'])) { /* Si el usuario desea terminar el juego */
    header('location: ControllerGameOver.php');
}

require_once '../views/ViewAnswer.php';
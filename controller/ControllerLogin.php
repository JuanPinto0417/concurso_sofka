<?php
require_once '../models/usuariodao.php';
$dao = new UsuarioDao();
/* se verifica si el usuario existe de lo contrario se le aconseja registrarse */
if (isset($_POST['login'])) {
    session_start();

    $nick_name = htmlspecialchars($_POST['nick_name']);

    if (empty($nick_name)) {
        $message = "Campo Vacio";
    } else {

        $message = $dao->verifyUser($nick_name);

        if ($message == 200) { //verifica si existe user
            $_SESSION['total'] = 0;
            $_SESSION['user'] = $nick_name;
            $_SESSION['nivel'] = 0;
            header('location:../Controller/ControllerAnswer.php');
        }
    }
}
require_once '../views/ViewLogin.php';
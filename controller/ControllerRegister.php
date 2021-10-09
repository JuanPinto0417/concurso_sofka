<?php

require_once '../models/usuariodao.php';
/* En esta parte se valida los datos del jugador para así poder 
registrarse de manera satisfactoria */
if (isset($_POST['register'])) {

    $full_name = htmlspecialchars($_POST['full_name']); //se capta el nombre del jugador
    $nick_name = htmlspecialchars($_POST['nick_name']);
    $dao = new UsuarioDao();
    $message = $dao->verifyUser($nick_name);
    if ($message == 200) {
        $message = 'Usuario existente';
    } else {
        $message = $dao->insertUser($full_name, $nick_name); //se registra el jugador
    }
}

/*   else if($_POST['boton']=='limpiar'){

        $numid="";
        $nombre="";
        $apellido="";
        $mail="";
        $mensaje="";
    }    */
require_once '../views/ViewRegister.php';
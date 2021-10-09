<?php
session_start();
/* Esta sesión guarda el historial de juego del jugador */
include '../models/contentdao.php';
$dao = new ContentDao;
$id = $dao->consulUser($_SESSION['user']);
$message = $dao->insertPrize($_SESSION['total'], $id[0]['id_user']);

session_destroy();

require_once '../views/ViewGameOver.php';
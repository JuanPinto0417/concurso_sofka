<?php

include 'conexion.php';

class UsuarioDao extends Conexion
{

    public function insertUser($full_name, $nick_name)
    {
        $message = "";
        try {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO users(full_name,nick_name) VALUES (:full_name,:nick_name);";

            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(":full_name", $full_name);
            $stmt->bindParam(":nick_name", $nick_name);
            $stmt->execute();
            $fila = $stmt->rowCount();
            $message = "Guardó, Jugador con Exito!!";
        } catch (PDOException $e) {

            if ($e->errorInfo[1] == 1062) {
                $message = "El Jugador Existe!!";
                // duplicate entry, do something else
            } else {
                // an error other than duplicate entry occurred
                echo $e->errorInfo[1];
            }
        }
        return $message;
    }

    public function verifyUser($nick_name)
    {
        $message = "";
        $conexion = Conexion::conectar();
        $sql = "SELECT * from users where nick_name=:nick_name";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":nick_name", $nick_name);
        $stmt->execute();
        $fila = $stmt->rowCount();

        if (!$fila) {
            $message = "Por favor, registrese";
        } else {
            $message = 200;
        }
        return $message;
    }
}
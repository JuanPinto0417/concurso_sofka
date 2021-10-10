<?php

include 'conexion.php';
//Se realiza una plantilla para crear objetos 
class ContentDao extends Conexion
{

    public function viewQuestion($id_categoria)
    {

        $conexion = Conexion::conectar();
        /* Con este codigo se genera la pregunta de manera aleatoria */
        $sql = "SELECT * FROM preguntas where id_categoria=:id_categoria
        ORDER BY RAND()
        LIMIT 1";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->execute();
        $array  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function consulUser($nick_name)
    {

        $conexion = Conexion::conectar();
        $sql = "SELECT id_user from users
        where nick_name=:nick_name";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":nick_name", $nick_name);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }

    public function viewAnswer($id_pregunta)
    {

        $conexion = Conexion::conectar();
        $sql = "SELECT * from respuestas
        where id_pregunta=:id_pregunta";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":id_pregunta", $id_pregunta);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }

    public function prize($id_premio)
    {

        $conexion = Conexion::conectar();
        $sql = "SELECT * from premios
        where id_premios=:id_premios";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":id_premios", $id_premio);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $array;
    }

    public function insertPrize($puntuacion, $id_user)
    {
        $message = "";
        $conexion = Conexion::conectar();
        $sql = "INSERT INTO resultados(id_user,puntuacion) VALUES (:id_user,:puntuacion);";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":id_user", $id_user);
        $stmt->bindParam(":puntuacion", $puntuacion);
        $stmt->execute();
        $fila = $stmt->rowCount();
        $message = "Puntuacion guardada!!";
        return $message;
    }
}
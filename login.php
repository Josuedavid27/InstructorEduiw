<?php
session_start();
require_once "conexion.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
        $error = "Todos los campos son obligatorios";
    } else {

        $usuario = trim($_POST["usuario"]);
        $contrasena = $_POST["contrasena"];

        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":usuario", $usuario);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $usuarioDB = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($contrasena, $usuarioDB["contrasena"])) {

                $_SESSION["usuario"] = $usuarioDB["usuario"];
                header("Location: dashboard.php");
                exit();

            } else {
                $error = "Contraseña incorrecta";
            }

        } else {
            $error = "El usuario no existe";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solidrgb(189, 200, 212);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h1 {
            margin-top: 0;
            text-align: center;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;


        }
        .login-container button {
            padding: 10px;
            background-color: #343a40;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #495057;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php
            $message = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $usuario = $_POST["usuario"];
                $contrasena = $_POST["contrasena"];
                // Simulación de envío
                $message = "Usuario: $usuario, Contraseña: $contrasena";
                // Limpiar los campos
                $usuario = "";
                $contrasena = "";
            }
        ?>
        <form method="post" action="">
            <input type="text" name="usuario" placeholder="Usuario" value="<?php echo isset($usuario) ? $usuario : ''; ?>" required>
            <input type="password" name="contrasena" placeholder="Contraseña" value="<?php echo isset($contrasena) ? $contrasena : ''; ?>" required>
            <button type="submit">Enviar</button>
        </form>
        
    </div>
</body>
</html>
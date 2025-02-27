<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $usuario = $_POST["usuario"];
                $contrasena = $_POST["contrasena"];
                
            }
        ?>
        <form method="post" action="">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Formulario Login</title>
</head>
<body>
    <div class="form-body">
        <img src="img/Logo.png" alt="user-login">
        <p class="text">Bienvenido</p>
        <form class="login-form">
            <input type="text" name="user" id="user" placeholder="Email o nombre de usuario">
            <input type="password" name="pass" id="pass" placeholder="Contraseña">
            <button class="button" onclick="validarpass()"><a href="index2.php">Iniciar Sesion</a></button>
        </form>
        <button onclick="validarpass()"><a href="registrousuarios.php">Registrate</a></button>
    </div>

    <script src="login.js"></script>
</body>
</html>
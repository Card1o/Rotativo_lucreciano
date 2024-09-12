<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("Location: creacion.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="algo.css?rev=<?php echo time();?>">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="../index.php"><img src="../img/Captura-removebg-preview.png" width="83.25"height="46.875"></a></li>
        </ul>
    </nav>
</header>
<div class="login">
        <h1>Iniciar Sesión</h1>
        <form action="login/login_admin.php" method="POST">
            <div class="input-login">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="input-login">
                <input type="password" name="contrasena" placeholder="Contraseña" required>
            </div>
            <button>Entrar</button>
        </form>
    </div>
</body>
</html>
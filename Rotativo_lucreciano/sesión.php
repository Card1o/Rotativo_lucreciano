<?php session_start();if (isset($_SESSION['S_IDUSUARIO'])){

  
}  


?>

<!DOCTYPE html>
<html lang="es">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTATIVO LJV</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registroo.css">
    <link rel="shortcut icon" href="img/Logos.ico" type="Logos.ico">
<link rel="shortcut icon" href="img/Imagen-de-WhatsApp-2023-08-28-a-las-08.08.23.ico" type="image/x-icon">
</head> 
<body>
    <header>
        <nav>
          <ul>
          <li><a href="index.php"><img src="img/Captura-removebg-preview.png" width="83.25"height="46.875"></a></li>
          <li style="float:right"><a href="index_perfil.php">Ejemplo, Perfil</a>
            <li style="float:right"><a href="Registro.php">Registro</a>
          </ul>
        </nav>
      </header>
      <br>
      <section class="container">
      <h2>Inicio de Sesión</h2>
      <form>
        <section>
          <label for="correo">Correo:</label>
          <input type="email" id="correo" name="correo" required>
        </section>
        
        <section>
          <label for="contrasena">Contraseña:</label>
          <input type="password" id="contrasena" name="contrasena" required>
        </section>
      <button type="submit">Iniciar Sesión</button>
    </form>
      </section>
      <br>
      <?php include("includes/footer.php"); ?>
    </body>
</html>
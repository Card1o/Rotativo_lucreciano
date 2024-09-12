<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTATIVO LJV</title>
    <link rel="stylesheet" href="css/style.css?rev=<?php echo time();?>">
    <link rel="shortcut icon" href="img/Logtipo.ico" type="Logos.ico">
    <link rel="shortcut icon" href="img/Logtipo.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
        <ul>
            <li><a href="index.php"><img src="img/Captura-removebg-preview.png" width="83.25"height="46.875"></a></li>
            <li><a href="Creditos.php">Quienes Somos</a></li>
            <li><a href="#">Contenidos</a>
            <ul>
              <li><a href="Noticias.php">Dialoguemos</a></li>
              <li><a href="Archivo.php">Archivo</a></li>
              <li><a href="Reconocimientos.php">Reconocer</a></li>

            </ul>
            <li><a href="https://issuu.com/gacetaljv/docs/junio_2024_-_gaceta_escolar_no._1">Gaceta Escolar</a>
            <li style="float:right"> <a href="relog.php"><span id="fecha"></span></a></li>
            <li style="float:right"><a href="darck/DC_index.php"><img src="img/lunu.png" width="35"height="35"></a></li>
            <script>
              
              function mostrarFecha() {
                  var fecha = new Date();
                  var dia = fecha.getDate();
                  var mes = fecha.getMonth() + 1;
                  var año = fecha.getFullYear();
                  var fechaActualizada = dia + '/' + mes + '/' + año;
                  document.getElementById('fecha').textContent = fechaActualizada;
              }
      
              document.addEventListener("DOMContentLoaded", function () {
                  mostrarFecha();
              });
      
          </script>
      
            </li>
     
          </ul>
        </nav>
      </header>
    
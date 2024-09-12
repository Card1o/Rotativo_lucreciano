<?php
include("../bd.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM archivo WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];

    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE archivo set titulo = '$titulo', descripcion = '$descripcion' WHERE id = $id";
    mysqli_query($conexion, $query);
    header("Location: ../archivo.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador</title>
    <link rel="stylesheet" href="../algo.css">
    <link rel="shortcut icon" href="../img/Imagen-de-WhatsApp-2023-08-28-a-las-08.08.23.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../archivo.php">Archivados</a></li>
            <li><a href="../index.php">El rotativo</a></li>
        </ul>
    </nav>

<div class="contenedor">
        <div class="formulario">
            <div class="tarjeta">
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="grupo">
                        <input type="text" name="titulo" value="<?php echo $titulo; ?>" placeholder="Actualiza el titulo">
                    </div>
                    <br>
                    <div class="grupo">
                        <input type="text" name="des" value="<?php echo $descripcion; ?>" rows="3" placeholder="Actualiza la descripcion"></input>
                    </div>
                    <button name="update">
                        Updated
                    </button>
                </form>
            </div>
        </div>
</div>
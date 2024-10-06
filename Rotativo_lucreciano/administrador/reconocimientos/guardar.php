<?php

include("../bd.php");

if (isset($_POST['guardar'])) {

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_FILES['imagen']['tmp_name'];

    if (isset($imagen) && $imagen != "") {
        $tipo = $_FILES['imagen']['type'];
        $imagen_binaria = file_get_contents($imagen); // Convertir la imagen a formato binario

        // Validar el tipo de imagen
        if (!(strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'png'))) {
            echo "El tipo de archivo no coincide.";
        } else {
            // Usar una consulta preparada para insertar datos seguros en la base de datos
            $query = "INSERT INTO reconocimientos(titulo, descripcion, imagen, tipo_imagen) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conexion, $query);

            // Bindear los parámetros de la consulta
            mysqli_stmt_bind_param($stmt, "ssss", $titulo, $descripcion, $imagen_binaria, $tipo);
            $resultado = mysqli_stmt_execute($stmt);

            if (!$resultado) {
                die("Query Failed");
            }

            // Redireccionar a la página de reconocimientos después de insertar
            header('Location: ../reconocimientos.php');
        }
    }
}

?>

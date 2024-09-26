<?php

include("../bd.php");  // Incluir conexión a la base de datos

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener el contenido de la imagen y su tipo
    $query = "SELECT imagen, tipo_imagen FROM reto_mental WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Enviar el encabezado con el tipo MIME correcto (por ejemplo, image/jpeg)
        header("Content-Type: " . $row['tipo_imagen']);
        echo $row['imagen'];  // Mostrar la imagen binaria
    } else {
        // En caso de que no se encuentre la imagen, enviar un error o una imagen por defecto
        echo "Imagen no encontrada.";
    }
}
?>

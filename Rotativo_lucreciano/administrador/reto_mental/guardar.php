<?php

include("../bd.php");  

if (isset($_POST['guardar'])) {

    // Recibir los datos del formulario
    $reto = $_POST['reto'];
    $imagen = $_FILES['imagen']['name'];

    // Verificar si hay una imagen subida
    if (isset($imagen) && $imagen != "") {
        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];
        $dataImagen = file_get_contents($temp);  // Obtener el contenido binario de la imagen

        // Comprobar el tipo de archivo (solo permitir GIF, JPEG, PNG, WEBP)
        if (!((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'png') || strpos($tipo, 'webp')))) {
            echo "El tipo de archivo no coincide";
        } else {
            // Guardar el archivo como BLOB en la base de datos
            $query = "INSERT INTO reto_mental (reto, imagen, tipo_imagen) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conexion, $query);
            
            // Asignar los valores de reto, imagen binaria y tipo de imagen a la consulta
            mysqli_stmt_bind_param($stmt, "sss", $reto, $dataImagen, $tipo);  // "s" para strings, incluido el binario en MySQL

            // Ejecutar la consulta
            $resultado = mysqli_stmt_execute($stmt);

            // Verificar si se guardó correctamente
            if (!$resultado) {
                die("Error al guardar en la base de datos.");
            }

            // Redirigir al usuario de nuevo a la página reto_mental.php
            header('Location: ../reto_mental.php');
        }
    }
}
?>

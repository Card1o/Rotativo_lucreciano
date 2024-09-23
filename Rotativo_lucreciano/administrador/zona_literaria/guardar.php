<?php

include("../bd.php");  
/*/
if (isset($_POST['guardar'])){
    echo 'saving';
}
*/
if (isset($_POST['guardar'])){


    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $descripcion= $_POST['descripcion'];


        $query = "INSERT INTO literaria(titulo, descripcion, autor) VALUES ('$titulo', '$descripcion', '$autor')";
        $resultado = mysqli_query($conexion, $query);
            if (!$resultado){
                 die("Query Failed");
                }
            header('Location: ../zona_literaria.php');

         }

?>
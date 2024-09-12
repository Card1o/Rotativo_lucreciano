<?php

include("../bd.php");  
/*/
if (isset($_POST['guardar'])){
    echo 'saving';
}
*/
if (isset($_POST['guardar'])){


    $titulo = $_POST['titulo'];
    $persona = $_POST['persona'];
    $descripcion= $_POST['descripcion'];


        $query = "INSERT INTO literaria(titulo, descripcion, persona) VALUES ('$titulo', '$descripcion', '$persona')";
        $resultado = mysqli_query($conexion, $query);
            if (!$resultado){
                 die("Query Failed");
                }
            header('Location: ../zona_literaria.php');

         }

?>
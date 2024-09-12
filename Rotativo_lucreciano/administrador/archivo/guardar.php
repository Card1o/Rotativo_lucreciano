<?php

include("../bd.php");  
/*/
if (isset($_POST['guardar'])){
    echo 'saving';
}
*/
if (isset($_POST['guardar'])){


    $titulo = $_POST['titulo'];
    $descripcion= $_POST['descripcion'];
    $imagen = $_FILES['imagen']['name'];

    if(isset($imagen) && $imagen !=""){
        $tipo = $_FILES['imagen']['type'];
        $temp = $_FILES['imagen']['tmp_name'];

    
    if( !((strpos($tipo, 'gif') || strpos($tipo, 'jpeg') || strpos($tipo, 'png')))){
        echo "el tipo de archivo no coincide";
    }else{
        $query = "INSERT INTO archivo(titulo, descripcion, imagen) VALUES ('$titulo', '$descripcion', '$imagen')";
        $resultado = mysqli_query($conexion, $query);
            if (!$resultado){
                 die("Query Failed");
                }
            move_uploaded_file($temp,'img/'.$imagen);
            header('Location: ../archivo.php');

         }
    }
}

?>
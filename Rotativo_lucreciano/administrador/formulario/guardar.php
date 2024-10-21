<?php
include("../bd.php"); 

if (isset($_POST['enviar'])) { //revisa si existe la funcion enviar

    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $navigation = $_POST['navigation'];
    $functionality = $_POST['functionality'];
    $suggestions = $_POST['suggestions'];
    $missing = $_POST['missing'];

    $query = "INSERT INTO formulario (email, comments, navigation, functionality, suggestions, missing) 
              VALUES ('$email', '$comments', '$navigation', '$functionality', '$suggestions', '$missing')";

    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Query Failed: " . mysqli_error($conexion)); 
    }

    header('Location: ../../index.php');
    exit;
}
?>

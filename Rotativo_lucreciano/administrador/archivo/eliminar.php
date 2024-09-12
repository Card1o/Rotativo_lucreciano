<?php
include("../bd.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM archivo WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }
    header("Location: ../archivo.php");
}
?>
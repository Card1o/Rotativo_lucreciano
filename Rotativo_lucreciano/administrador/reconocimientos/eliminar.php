<?php
include("../bd.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM reconocimientos WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if (!$result) {
        die("Query Failed");
    }
    header("Location: ../reconocimientos.php");
}
?>
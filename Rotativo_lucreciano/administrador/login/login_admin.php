<?php

session_start();

include("../bd.php");


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$result = mysqli_query($conexion, "SELECT * FROM login WHERE usuario = '$usuario'
and contrasena = '$contrasena' ");

if(mysqli_num_rows($result) > 0){
    $_SESSION['login'] = $usuario;
    header("Location: ../creacion.php");
}else{
    echo'
    <script>
        alert("El usuario o la contraseña son incorrectas");
        window.location = "../login.php"
    </script>
';
exit();

}

?>
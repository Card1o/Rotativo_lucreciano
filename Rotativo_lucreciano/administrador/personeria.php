<?php include("includes/header.php"); ?>

<?php
    session_start();

    if(!isset($_SESSION['login'])){
        echo'
            <script>
                alert("Inicia sesión");
                window.location = "index.php";
            </script>
        ';
        header("Location: ../index.php");
        session_destroy();
        die();
    }
?>

    <div class="contenedor">
        <div class="formulario">
            <div class="tarjeta">
                <form action="personeria/guardar.php" method="POST" enctype="multipart/form-data">
                    <div class="grupo">
                        <input type="text" name="titulo" placeholder="Titulo del noticiero" autofocus>
                    </div>
                    <div class="grupo">
                        <input type="text" name="descripcion" rows="3" placeholder="Descripción de noticia">
                    </div>
                    <div class="drop_area">
                        <input type="file" name="imagen">
                    </div>
                    <input type="submit" name="guardar" value="Guardar">
                </form>
            </div>
        </div>
    </div>  
     <div class="muestras">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>titulo</th>
                    <th>descripcion</th>
                    <th>img</th>
                    <th>acciones</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
                    $query = "SELECT * FROM personeria";
                    $result_ = mysqli_query($conexion, $query);

                    while($row = mysqli_fetch_array($result_)){?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['titulo']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><img src="img/<?php echo $row['imagen']?>" id="imagenes"></td>
                            <td>
                            <button class="Btn"  onclick="window.location.href='personeria/editar.php?id=<?php echo $row['id']?>';">Editar
      <svg class="svg" viewBox="0 0 512 512">
        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                            </button>
                            <button class="noselect" onclick="window.location.href='personeria/eliminar.php?id=<?php echo $row['id']?>';">
                                <span class="text">Eliminar</span><span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">

                                        </path>
                                    </svg>
                                </span>
                        </button>    
                            </td>
                        </tr>
                    <?php }?>
            </tbody>
         </table>
        </div>
        
        <?php include("includes/footer.php");?>
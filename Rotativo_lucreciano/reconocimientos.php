<?php include("includes/header3.php"); ?>
<?php 
        $query = "SELECT * FROM reconocimientos";
        $result_ = mysqli_query($conexion, $query);

        while($row = mysqli_fetch_array($result_)){?>
      <div class="tarjeta_origins">
        
        <img src="administrador/reconocimientos/mostrar_imagen.php?id=<?php echo $row['id']; ?>" id="imagenes">
        <h2><?php echo $row['titulo']?></h2>
        <div>
        <p><?php echo $row['descripcion']?></p>
        <p><?php echo $row['fecha']?></p>
        </div>
      </div>
<?php } ?>
<?php include("includes/footer.php"); ?>
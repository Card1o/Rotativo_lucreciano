<?php include("includes/header3.php"); ?>
<br>
<section>
<h2><strong>OBRAS DE LA GALERÍA</strong></h2>


<div class="galeria">
<?php 
        $query = "SELECT * FROM galeria";
        $result_ = mysqli_query($conexion, $query);

        while($row = mysqli_fetch_array($result_)){?>
      <div class="imagen">
        <p><?php echo $row['persona']; ?></p>
      <img src="administrador/galeria_virtual/mostrar_imagen.php?id=<?php echo $row['id']; ?>" id="imagenes">
      </div>
            <?php } ?>
</div>
<?php include("includes/footer.php"); ?>
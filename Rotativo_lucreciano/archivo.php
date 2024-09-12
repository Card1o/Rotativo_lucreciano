<?php include("includes/header3.php"); ?>
<br>
<section class="archivador">
    <div>
        <h3><strong>BUSCAR ROTATIVOS ANTERIORES</strong></h3>
    </div>
    <?php 
        $query = "SELECT * FROM archivo";
        $result_ = mysqli_query($conexion, $query);

        while($row = mysqli_fetch_array($result_)){?>
      <div class="tarjeta_informativa">
        
        <img src="administrador/img/<?php echo $row['imagen']?>">
        <h2><?php echo $row['titulo']?></h2>
        <div>
        <p><?php echo $row['descripcion']?></p>
        <p><?php echo $row['fecha']?></p>
        </div>
      </div>
<?php } ?>
<?php include("includes/footer.php"); ?>
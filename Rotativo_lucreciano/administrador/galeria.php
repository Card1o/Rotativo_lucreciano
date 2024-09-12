<?php include("includes/header.php"); ?>

    <div class="contenedor">
        <div class="formulario">
            <div class="tarjeta">
                <form action="galeria_virtual/guardar.php" method="POST" enctype="multipart/form-data">
                    <div class="grupo">
                        <input type="text" name="persona" placeholder="Persona de autoria" autofocus>
                    </div>
                    <br>
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
                    <th>persona</th>
                    <th>img</th>
                    <th>acciones</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
                    $query = "SELECT * FROM galeria";
                    $result_ = mysqli_query($conexion, $query);

                    while($row = mysqli_fetch_array($result_)){?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['persona']?></td>
                            <td><img src="img/<?php echo $row['imagen']?>" id="imagenes"></td>
                            <td>
                            <button class="noselect" onclick="window.location.href='galeria_virtual/eliminar.php?id=<?php echo $row['id']?>';">
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
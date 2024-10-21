<?php include('includes/header3.php');?>
<form action="administrador/formulario/guardar.php" method="post">
    <label for="email">Correo electrónico</label>
    <input type="email" id="email" name="email" required>

    <label for="comments">Comentarios</label>
    <textarea id="comments" name="comments"></textarea>

    <label>¿Qué tan fácil fue navegar por nuestro sitio web?*</label>
    <label><input type="radio" name="navigation" value="comodo" required> Cómodo</label>
    <label><input type="radio" name="navigation" value="incomodo"> Incomodo</label>
    <label><input type="radio" name="navigation" value="no_sabe"> No sabe/no responde</label>

    <label>¿Todas las pestañas, iconos y ventanas funcionaron de manera adecuada?*</label>
    <label><input type="radio" name="functionality" value="si" required> Sí</label>
    <label><input type="radio" name="functionality" value="no"> No</label>

    <label for="suggestions">¿Qué mejoras sugerirías?</label>
    <textarea id="suggestions" name="suggestions"></textarea>

    <label for="missing">¿Consideras que algo falta?</label>
    <textarea id="missing" name="missing"></textarea>

    <input type="submit" value="Enviar" name="enviar">
</form>
<?php include('includes/footer.php');?>
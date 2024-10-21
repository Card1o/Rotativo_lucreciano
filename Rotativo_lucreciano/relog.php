<?php include("includes/header3.php"); ?>

<br>
<section id="date" align="center">
<h2 id="hoy">La hora y fecha actual en Colombia es</h2>

<h1>
<span id="horaActual"></span></p></h1>    

<h1>
<span id="fecha"></span></p></h1>
</section>

    <script>
        function actualizarHora() {
            var fecha = new Date();
            var hora = fecha.getHours();
            var minuto = fecha.getMinutes();
            var segundo = fecha.getSeconds();
            minuto = agregarCero(minuto);
            segundo = agregarCero(segundo);
            var horaActualizada = hora + ':' + minuto + ':' + segundo;
            document.getElementById('horaActual').textContent = horaActualizada;
        }

        function agregarCero(i) {
            if (i < 10) {i = "0" + i};  // Agrega un cero si es necesario
            return i;
        }

        setInterval(actualizarHora, 1000); // Actualiza la hora cada segundo

        document.addEventListener("DOMContentLoaded", function () {
            actualizarHora(); // También actualiza la hora cuando se carga el documento
        });
    </script>
<div id="ww_b10e40fe47bc1" v='1.3' loc='id' a='{"t":"responsive","lang":"es","sl_lpl":1,"ids":["wl3398"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"rgba(0,128,15,1)","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"rgba(255,215,33,1)","cl_moon":"rgba(150,181,185,1)","cl_thund":"#FF5722","sl_tof":"5"}'><a href="https://weatherwidget.org/" id="ww_b10e40fe47bc1_u" target="_blank">Widget weather</a></div><script async src="https://app2.weatherwidget.org/js/?id=ww_b10e40fe47bc1"></script>
<?php include("includes/footer.php"); ?>
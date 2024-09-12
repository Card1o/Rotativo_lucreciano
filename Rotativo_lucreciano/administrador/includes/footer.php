<script>
document.addEventListener("DOMContentLoaded", function() {
    const dropArea = document.getElementById("dropArea");
    const fileInput = document.getElementById("fileInput");
    const gallery = document.getElementById("gallery");

    // Evitar el comportamiento predeterminado en drag/drop
    ["dragenter", "dragover", "dragleave", "drop"].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Resaltar el área cuando se arrastra un archivo
    ["dragenter", "dragover"].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.add("active"), false);
    });

    ["dragleave", "drop"].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.remove("active"), false);
    });

    // Manejar el evento de drop
    dropArea.addEventListener("drop", handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;

        handleFiles(files);
    }

    // Manejar la selección de archivos a través del input
    fileInput.addEventListener("change", (e) => {
        const files = e.target.files;
        handleFiles(files);
    });

    // Función para manejar los archivos seleccionados o arrastrados
    function handleFiles(files) {
        [...files].forEach(previewFile);
    }

    // Función para crear una vista previa de la imagen
    function previewFile(file) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function() {
            const img = document.createElement("img");
            img.src = reader.result;
            img.style.maxWidth = "100px";
            img.style.margin = "10px";
            gallery.appendChild(img);
        };
    }
});
</script>
</body>
</html>
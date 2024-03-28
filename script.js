document.getElementById('fileInput').addEventListener('change', function () {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var imgElement = document.getElementById('previewImage');
            imgElement.src = event.target.result;
            imgElement.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});

function editarPerfil() {
    window.location.href = "editar_perfil.php";
}
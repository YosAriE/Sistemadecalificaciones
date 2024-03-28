const btnLanzarModal = document.querySelector('#lanzar-modal');
const contModal = document.querySelector('.contenedor-modal');
const formAgregar = document.getElementById('form-agregar');

btnLanzarModal.addEventListener('click', (e) => {
    e.preventDefault();
    contModal.classList.add('mostrar'); // Añadir la clase 'mostrar' al contenedor modal
});

formAgregar.addEventListener('submit', (e) => {
    e.preventDefault();

    // Obtener los datos del formulario
    const nombre = document.querySelector('#nombre').value;
    const portada = document.querySelector('#portada').files[0]; // Solo tomamos el primer archivo si hay múltiples

    // Crear un nuevo elemento de imagen
    const nuevaImagen = document.createElement('img');
    nuevaImagen.src = URL.createObjectURL(portada); // Obtener la URL de la imagen

    // Crear un nuevo botón
    const nuevoBoton = document.createElement('button');
    nuevoBoton.textContent = nombre; // El texto del botón será el nombre del semestre
    nuevoBoton.classList.add('btn');

    // Redireccionar al hacer clic en el botón
    nuevoBoton.addEventListener('click', () => {
        window.location.href = 'pagina_destino.php'; // Cambiar 'pagina_destino.php' por la URL de la página de destino
    });

    // Agregar la nueva imagen y el nuevo botón al contenedor
    const contenedor = document.querySelector('.contenedor');
    contenedor.appendChild(nuevaImagen);
    contenedor.appendChild(nuevoBoton);

    // Ocultar el modal
    contModal.classList.remove('mostrar');

    // Limpiar el formulario
    formAgregar.reset();
});

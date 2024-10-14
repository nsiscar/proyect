// Buscador de Proyectos
document.getElementById('btn-buscar').addEventListener('click', function () {
    const searchQuery = document.getElementById('buscar-proyectos').value.toLowerCase();
    const projects = document.querySelectorAll('.card');

    projects.forEach((project) => {
        const title = project.querySelector('.card-title').textContent.toLowerCase();
        if (title.includes(searchQuery)) {
            project.style.display = '';
        } else {
            project.style.display = 'none';
        }
    });
});

// Validación y modal de confirmación
document.getElementById('form-contacto').addEventListener('submit', function (event) {
    event.preventDefault();
    var email = document.getElementById('email').value;
    if (email.includes('@')) {
        var modal = new bootstrap.Modal(document.getElementById('modalConfirmacion'));
        modal.show();
    } else {
        alert('Por favor, introduce un correo electrónico válido.');
    }
});

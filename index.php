<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Alejandro Ríos Torres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Alejandro Ríos Torres</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./paginas/proyectos.html">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./paginas/contacto.htm">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" id="buscar-proyectos" type="search" placeholder="Buscar proyectos"
                        aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Información personal -->
    <div class="container mt-4">
        <h1>¡Hola! Soy Alejandro Ríos Torres</h1>
        <p>Soy un chaval que le gusta la informática. Me gusta hacer bastante deporte y soy bastante curioso. </p>
        <h2>Educación</h2>
        <ul>
            <li>Educación Secundaria Obligatoria - Jesuitas Pamplona (2017-2020)</li>
            <li>Grado Medio de Informática - Salesianos(2020-2022)</li>
            <li>Grado Superior de Informática - CuatroVientos(2022-)</li>
        </ul>
        <h2>Intereses</h2>
        <p>Me encanta el desarrollo web, la ciberseguridad, la inteligencia artificial, jugar videojuegos y enterarme de
            las noticias que ocurren por el mundo. Me encanta escuchar música y más cuando estoy concentrado haciendo
            mis trabajos, me relajan bastante y para mí se me hacen más llevaderos y divertidos.
        </p>
    </div>
    <section id="habilidades" class="container my-5">
        <h2>Habilidades</h2>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>HTML/CSS</span>
                <span class="badge bg-primary rounded-pill">70%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>ENCONTRAR SOLUCIONES</span>
                <span class="badge bg-primary rounded-pill">85%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>RAPIDÉZ A LA HORA DE TRABAJAR</span>
                <span class="badge bg-primary rounded-pill">82%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>TRABAJO EN EQUIPO</span>
                <span class="badge bg-primary rounded-pill">95%</span>
            </li>
        </ul>
    </section>

    <form action="agregar_proyecto.php" method="POST" enctype="multipart/form-data">
        <label for="titulo">Título del Proyecto:</label>
        <input type="text" id="titulo" name="titulo" required>
    
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
    
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen">
    
        <label for="enlace">Enlace del Proyecto:</label>
        <input type="url" id="enlace" name="enlace">
    
        <button type="submit">Añadir Proyecto</button>
    </form>
    
    <section class="container my-5">
        <h2>Conéctame</h2>
        <a href="https://www.infojobs.net/" target="_blank">InfoJobs</a>
        <a href="https://github.com/nsiscar/proyect?tab=readme-ov-file#estructura-del-proyecto" target="_blank">GitHub</a>
        <!-- Agrega más enlaces a redes sociales -->
    </section>
    
    <?php
include './config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $enlace = $_POST['enlace'];

    $imagen = $_FILES['imagen']['name'];
    $imagen_tmp = $_FILES['imagen']['tmp_name'];
    $carpeta_destino = "imagenes/" . basename($imagen);

    if (move_uploaded_file($imagen_tmp, $carpeta_destino)) {
        $query = "INSERT INTO proyectos (titulo, descripcion, imagen, enlace) VALUES ('$titulo', '$descripcion', '$carpeta_destino', '$enlace')";

        if ($conexion->query($query) === TRUE) {
            echo "Proyecto añadido correctamente.";
        } else {
            echo "Error: " . $query . "<br>" . $conexion->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }

    $conexion->close();
}
?>



    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-auto py-3">
        <div class="text-center p-3">
            © 2024 Alejandro Ríos Torres | Amante de la tecnología y el desarrollo web.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./Java/js.js"></script>
</body>

</html>
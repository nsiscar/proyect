<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos - Alejandro Ríos Torres</title>
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
                        <a class="nav-link" href="../index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./proyectos.html">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contacto.htm">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" id="buscar-proyectos" type="search" placeholder="Buscar proyectos"
                        aria-label="Buscar">
                    <button class="btn btn-outline-success" type="button" id="btn-buscar">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Proyectos en Cards -->
    <div class="container mt-4">
        <h1>Mis Proyectos</h1>
        <div class="row">
            <!-- Proyecto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="../Ftos/proy1.jpg" class="card-img-top" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title">Sistema de Gestión de Inventarios</h5>
                        <p class="card-text">Una plataforma web para gestionar inventarios en tiempo real.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalProyecto1">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal Proyecto 1 -->
            <div class="modal fade" id="modalProyecto1" tabindex="-1" aria-labelledby="modalProyecto1Label"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalProyecto1Label">Sistema de Gestión de Inventarios</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Una plataforma web innovadora que permite gestionar inventarios en tiempo real. Esta
                            herramienta está diseñada para facilitar el seguimiento de productos, controlando
                            eficazmente las entradas y salidas de stock. Los usuarios tendrán acceso a reportes
                            detallados y análisis de datos, lo que les permitirá tomar decisiones informadas y optimizar
                            la planificación de sus recursos. Además, el sistema incluye notificaciones automáticas para
                            evitar tanto los faltantes como el sobreabastecimiento de productos. Con su interfaz
                            intuitiva, garantizamos que cualquier usuario, sin importar su nivel técnico, pueda utilizar
                            la plataforma de manera sencilla y efectiva.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="../Ftos/descarga.jpeg" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Plataforma de E-learning</h5>
                        <p class="card-text">Una aplicación web para la enseñanza en línea.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalProyecto2">
                            Ver más
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal Proyecto 2 -->
            <div class="modal fade" id="modalProyecto2" tabindex="-1" aria-labelledby="modalProyecto2Label"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalProyecto2Label">Plataforma de E-learning</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Una aplicación web diseñada para facilitar la enseñanza en línea de manera accesible y
                            efectiva. Esta plataforma ofrece un entorno de aprendizaje interactivo que permite a los
                            educadores crear y gestionar cursos, proporcionando materiales educativos de diversas
                            formas, como videos, lecturas y actividades interactivas. Los estudiantes podrán acceder a
                            contenido de calidad desde cualquier lugar y en cualquier momento, lo que promueve la
                            flexibilidad en su proceso de aprendizaje. Además, la plataforma incluye herramientas de
                            seguimiento del progreso y evaluación, lo que permite a los docentes monitorear el
                            rendimiento de sus alumnos en tiempo real. Con una interfaz amigable y fácil de usar,
                            garantizamos una experiencia educativa enriquecedora para todos los usuarios.


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'config.php';

    $query = "SELECT * FROM proyectos";
    $resultado = $conexion->query($query);

    while ($proyecto = $resultado->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<img src='" . $proyecto['imagen'] . "' alt='Imagen de " . $proyecto['titulo'] . "'>";
        echo "<h5>" . $proyecto['titulo'] . "</h5>";
        echo "<p>" . $proyecto['descripcion'] . "</p>";
        echo "<a href='" . $proyecto['enlace'] . "' target='_blank'>Ver Proyecto</a>";
        echo "</div>";
    }

    $conexion->close();
    ?>

    <footer class="bg-light text-center text-lg-start mt-auto py-3">
        <div class="text-center p-3">
            © 2024 Alejandro Ríos Torres | Proyectos de software innovadores.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Java/js.js"></script>
</body>

</html>
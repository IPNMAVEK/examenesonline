<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Alumnos</title>

    <!-- Script JavaScript para la Fecha y Hora -->
    <script>
        function actualizarReloj() {
            const reloj = document.getElementById("clock");
            const ahora = new Date();
            const fecha = ahora.toLocaleDateString();
            const hora = ahora.toLocaleTimeString();
            reloj.textContent = `Fecha: ${fecha} | Hora: ${hora}`;
        }
        setInterval(actualizarReloj, 1000);
        actualizarReloj(); // Actualización inmediata al cargar
    </script>

    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a tu CSS personalizado -->
    <style>
        body {
            background-color: white;
            color: #000;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #800000; /* Guinda */
            color: white;
            padding: 10px 0;
        }
        header h2 {
            margin-left: 20px;
        }
        .navbar-toggler {
            background-color: white;
        }
        .dropdown-menu a {
            color: black;
        }
        .footer {
            background-color: #800000;
            color: white;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        #clock {
            font-size: 1.2rem;
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-custom {
            margin: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <h2>Bienvenido.</h2>
            <!-- Botón de navegación desplegable -->
            <nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="menuDesplegable" aria-controls="menuDesplegable" aria-expanded="true" aria-label="Menú">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse" id="menuDesplegable">
                    <div class="dropdown-menu p-2">
                        <a class="dropdown-item" href="WebCam.html">Monitorear</a>
                        <a class="dropdown-item" href="Mavek.html">Salir</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="container text-center my-5">
        <div id="clock"></div>

        <h3 class="mb-3">Recuerda revisar que no tengas examenes pendientes examenes</h3>

        <div class="row justify-content-center my-4">
            <div class="col-md-3">
                <button onclick="Chat.php" class="btn btn-outline-dark btn-custom w-100">CHATS</button>
            </div>
            <div class="col-md-3">
                <button onclick="subirArchivo()" class="btn btn-outline-dark btn-custom w-100">SUBIR ARCHIVO</button>
            </div>
            <div class="col-md-3">
                <button onclick="Examenes.php" class="btn btn-outline-dark btn-custom w-100">EXÁMENES</button>
            </div>
            <div class="col-md-3">
                <button onclick="HelpDesk.php" class="btn btn-outline-dark btn-custom w-100">¿CONTACTAR CON HELP-DESK?</button>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="footer">
        <p>&copy; 2024 MAVEK | Todos los derechos reservados ®</p>
        <p>INSTITUTO POLITÉCNICO NACIONAL</p>
    </footer>

    <!-- Enlace a Bootstrap JS y Dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    
</body>
</html>
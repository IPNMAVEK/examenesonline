<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Enlace a Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilos -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
        }
        header {
            background-color: #6A1B47; /* Color guinda */
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #4A0C2A; /* Color guinda oscuro */
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        .contenedor {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }
        .card {
            text-align: center;
            margin: 15px;
        }
        .card i {
            font-size: 50px;
            color: #6A1B47;
            margin-bottom: 10px;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: none;
            margin-top: 20px;
        }
        footer {
            background-color: #4A0C2A;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>MAVEK</h1>
    </header>

    <!-- Navegación -->
    <nav>
        <a href="Mavek.html">Inicio</a>
        <a href="AboutUs.html">Conócenos</a>
        <a href="https://www.upiicsa.ipn.mx/oferta-educativa/">Oferta Educativa</a>
        <a href="LogginA.html">Estudiantes</a>
        <a href="LogginD.html">Docentes</a>
    </nav>

    <!-- Contenido principal -->
    <div class="contenedor">
        <div class="card">
            <a href="https://www.ipn.mx/assets/files/main/docs/inicio/calendarioIPN-Escolarizada.pdf" class="far fa-calendar-alt"></a>
            <h3 >Calendario Escolar</h3>
        </div>
        <div class="card">
            <a href="https://www.upiicsa.ipn.mx/estudiantes/gestion-escolar.html" class="fas fa-graduation-cap"></a>
            <h3>Gestión Escolar</h3>
        </div>
        <div class="card">
            <a href="https://www.upiicsa.ipn.mx/conocenos/directorio-upiicsa.pdf" class="fas fa-phone"></a>
            <h3>Directorio</h3>
        </div>
        <div class="card">
            <a href="https://www.saes.upiicsa.ipn.mx/" class="fas fa-chalkboard"></a>
            <h3>SAES</h3>
        </div>
        <div class="card">
            <a href="https://www.upiicsa.ipn.mx/notiupiicsa.html" class="fas fa-bullhorn"></a>
            <h3>NOTI-UPIICSA</h3>
        </div>
        <div class="card">
            <a href="https://www.upiicsa.ipn.mx/educacion-continua/cursos-diplomados.html" class="fas fa-book"></a>
            <h3>Cursos y Diplomados</h3>
        </div>
    </div>

    <!-- Google Maps -->
    <h2 style="text-align:center; color:#6A1B47;">Ubicación</h2>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4475.432127639426!2d-99.09249692738726!3d19.396214169800967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fc2e3efc321b%3A0xabf8454acb3a3a99!2sUPIICSA%20%E2%80%93%20Unidad%20Profesional%20Interdisciplinaria%20de%20Ingenier%C3%ADa%20y%20Ciencias%20Sociales%20y%20Administrativas%20IPN!5e0!3m2!1ses-419!2smx!4v1734310572018!5m2!1ses-419!2smx"
        allowfullscreen>
    </iframe>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 MAVEK | Todos los derechos reservados ® </p>
        <p>INSTITUTO POLITÉCNICO NACIONAL</p>
        <p>D.R. Instituto Politécnico Nacional (IPN). Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Alcaldía Gustavo A. Madero, C.P. 07738, Ciudad de México. Conmutador: 55 57 29 60 00 / 55 57 29 63 00. </p>
        <p>
            <a href="Loggin.html">Inicio</a> |
            <a href="#">Servicios</a> |
            <a href="#">Contacto</a>
        </p>
    </footer>
    
</body>
</html>

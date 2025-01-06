<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
        }

        header {
            background-color: #f4f4f4;
            padding: 20px 10px;
            text-align: center;
        }

        h1 {
            color: #0066cc;
        }

        /* Sección principal */
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .intro, .mision-vision-valores, .location {
            margin-bottom: 30px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 20px;
            color: #0066cc;
        }

        /* Misíon, Visión, Valores */
        .mvv-container, .main-points {
            display: flex;
            justify-content: space-around;
            text-align: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            min-width: 250px;
        }

        .card h3 {
            color: #0066cc;
        }

        /* Ubicación */
        iframe {
            width: 100%;
            height: 400px;
            border: none;
            margin-top: 20px;
        }

        footer {
            background-color: #002855;
            color: white;
            padding: 10px;
            text-align: center;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
		<img src="Logo.png" alt="Logo" title="Logo" width="200" height="150"/></center>
        <h1>¿Quiénes somos?</h1>
        <p>Nosotros, el equipo MAVAK, nos comprometemos a trabajar con la norma de calidad “ISO 9126” para nuestra administración, y la norma “IEEE 830” para nuestros requerimientos de trabajo durante el desarrollo de nuestro proyecto.  Trabajaremos de forma responsable y comprometida con nuestros clientes. Le brindaremos un servicio de calidad y excelencia cumpliendo los requerimientos que se nos pidan.</p>
    </header>

    <!-- Contenido principal -->
    <div class="container">

        <!-- Misión, Visión y Valores -->
        <section class="MAVEK">
            <h2 class="section-title">MAVEK</h2>
            <h2 class="main-points">Misión, Visión y Compromiso</h2>
            <div class="mvv-container">
                <div class="card">
                    <h3>Misión</h3>
                    <p>Proveer soluciones tecnológicas de vanguardia en automatización, control e instrumentación, mejorando la eficiencia de nuestros clientes con un servicio de excelencia.</p>
                </div>
                <div class="card">
                    <h3>Visión</h3>
                    <p>Ser el socio líder en tecnología industrial, impulsando el crecimiento de nuestros clientes con innovación y sostenibilidad.</p>
                </div>
                <div class="card">
                    <h3>Objetivo</h3>
                    <p>Este proyecto presenta un sistema de control para la supervisión de alumnos en exámenes en línea. Describiremos los problemas y desafíos iniciales que motivaron la planificación de una solución, así como las técnicas empleadas para recopilar requisitos y conocer las necesidades específicas de los usuarios en relación con el tema. Parte fundamental del desarrollo de este sistema será la aplicación de encuestas a los usuarios. <br><br>
                    A partir de la información obtenida, podremos definir las características esenciales que garantizarán la correcta implementación y aceptación de este sistema.  </p>
                </div>
            </div>
        </section>

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

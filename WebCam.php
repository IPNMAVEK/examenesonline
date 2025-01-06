<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Navegación con Webcam</title>
    <style>
        /* Estilo general */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        /* Panel de navegación */
        .navbar {
            background-color: #800000; /* Color burdeos */
            color: white;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        /* Contenedor principal */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        
        /* Botones */
        .button {
            background-color: #f8cfc1; /* Color de fondo */
            border: none;
            padding: 20px;
            margin: 20px;
            width: 300px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #f4b8a5;
        }

        /* Webcam container */
        #webcam-container {
            margin-top: 20px;
        }
        video {
            border: 2px solid #800000;
            border-radius: 10px;
            width: 320px;
            height: 240px;
        }


        .pregresp {
border: 1px solid #7DA5E0;
padding: 10px;
margin: 10px;
font-family: Arial, Verdana, Helvetica, sans-serif;
font-size: 15px;
font-weight: bold;
}

.pregunta {
color: #7DA5E0;
}

.respuestas {
color: #000000;
}
    </style>
</head>
<body>
    <!-- Panel de Navegación -->
    <div class="navbar">
        <a href="#" onclick="redirigir('menu')">MENU</a>
        <a href="#" onclick="redirigir('cerrar')">CERRAR SESIÓN</a>
    </div>

    <div class="pregresp">
        <div class="pregunta">1. ¿Crees que HTML es una buena tecnología?<br />
        </div>
        <div class="respuestas">
          <input type="radio" name="preg1" value="1" /> Sí<br />
          <input type="radio" name="preg1" value="2" /> No<br />
          <input type="radio" name="preg1" value="3" /> Ns/Nc<br />
        </div>
      </div>

    <!-- Contenedor de botones -->
    <div class="container">
        <button class="button" onclick="subirArchivo()">SUBIR ARCHIVO(S)</button>
        <button class="button" onclick="convertirArchivo()">CONVERTIR ARCHIVO(S)</button>
        <>
        <button class="button" onclick="activarWebcam()">ACTIVAR WEBCAM</button>
        <div id="webcam-container">
            <video id="webcam" autoplay></video>
        </div>
    </div>



    <script>
        // Funciones de redirección
        function redirigir(destino) {
            if (destino === 'menu') {
                window.open('menu.html', '_blank'); // Abre en otra pestaña
            } else if (destino === 'cerrar') {
                window.open('logout.html', '_blank'); // Redirige a cerrar sesión
            }
        }

        // Evento SUBIR ARCHIVO
        function subirArchivo() {
            alert('Evento SUBIR ARCHIVO ejecutado');
            // Lógica para subir archivo aquí
        }

        // Evento CONVERTIR ARCHIVO
        function convertirArchivo() {
            alert('Evento CONVERTIR ARCHIVO ejecutado');

        }

        // Activar Webcam
        function activarWebcam() {
            const video = document.getElementById('webcam');
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    })
                    .catch(function (error) {
                        alert('Error al acceder a la webcam: ' + error);
                    });
            } else {
                alert('Tu navegador no soporta el acceso a la webcam.');
            }
        }
    </script>
</body>
</html>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAVEK</title>
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
        <a href="HelpDesk.html">HELP DESK</a>
        <a href="AlumnoMenuExamenes.html">Regresar</a>
    </nav>

    <!-- Contenido principal -->
    <div class="contenedor">

        <form action="guardar_respuestas.php" method="POST">
            <h3>1. ¿Creen que lo logremos?</h3>
            <label><input type="radio" name="html_opcion" value="Si"> Sí</label><br>
            <label><input type="radio" name="html_opcion" value="No"> No</label><br>
            <label><input type="radio" name="html_opcion" value="Ns/Nc"> Valio Mad</label><br>
        
            <h3>2. ¿que calificacion creen sacar?</h3>
            <label><input type="radio" name="css_opcion" value='10'> 10</label><br>
            <label><input type="radio" name="css_opcion" value='9'> 9</label><br>
            <label><input type="radio" name="css_opcion" value='8'> 8</label><br>
            <label><input type="radio" name="css_opcion" value='7'> 7</label><br>
            <label><input type="radio" name="css_opcion" value='6'> 6</label><br>
            <label><input type="radio" name="css_opcion" value='5'> 5</label><br>
            <label><input type="radio" name="css_opcion" value='4'> 4</label><br>
            <label><input type="radio" name="css_opcion" value='3'> 3</label><br>
            <label><input type="radio" name="css_opcion" value='2'> 2</label><br>
            <label><input type="radio" name="css_opcion" value='1'> 1</label><br>
            <label><input type="radio" name="css_opcion" value='0'> 0</label><br>
        
            <br>
            <input type="submit" value="Enviar">
        </form>
        
    </div>


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

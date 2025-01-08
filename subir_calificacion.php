# Formulario de calificaciones

<!DOCTYPE html>
<html>
<head>
    <title>Subir calificaciones</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
        }
        
        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"], input[type="number"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        
        button[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <form action="guardar_calificacion.php" method="post">
        <h2>Subir calificaciones</h2>
        <label for="nombre">Nombre del estudiante:</label>
        <input type="text" id="boleta" name="nombre">
        
        <label for="calificacion">Calificación:</label>
        <input type="number" id="calificacion" name="calificacion" min="0" max="10">
        
        <button type="submit">Subir calificación</button>
    </form>
</body>
</html>





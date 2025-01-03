<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de Calificaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            height: 80px;
        }

        .header h1 {
            font-size: 18px;
            margin: 10px 0;
        }

        .info {
            margin-bottom: 20px;
        }

        .info p {
            margin: 5px 0;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        table th {
            background-color: #ff8c00;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .group {
            text-align: left;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logo_ipn.png" alt="IPN">
            <h1>UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA<br>Y CIENCIAS SOCIALES Y ADMINISTRATIVAS</h1>
        </div>

        <div class="info">
            <p><strong>BOLETA:</strong> 123456789</p>
            <p><strong>NOMBRE:</strong> ALEXANDER CAMACHO GUEVARA</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Gpo</th>
                    <th>Materia</th>
                    <th>1er Parcial</th>
                    <th>2o Parcial</th>
                    <th>3er Parcial</th>
                    <th>Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2NM22</td>
                    <td class="group">N203-METODOLOGÍA DE LA INVESTIGACIÓN</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>2NM22</td>
                    <td class="group">N207-ESTRUCTURA DE DATOS</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>2NM22</td>
                    <td class="group">N208-PROGRAMACIÓN DE BAJO NIVEL</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>3NM30</td>
                    <td class="group">N307-PROGRAMACIÓN ORIENTADA A OBJETOS</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>3NV30</td>
                    <td class="group">N302-ALGORITMOS COMPUTACIONALES</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>3NV31</td>
                    <td class="group">N303-INGENIERÍA DE REQUERIMIENTOS</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>1NM18</td>
                    <td class="group">N101-MATEMÁTICAS DISCRETAS</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>2NV2A</td>
                    <td class="group">N205-APLICACIÓN DE SISTEMAS DIGITALES</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                    <td>7</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

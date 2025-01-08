# Archivo PHP para guardar los datos (guardar_calificacion.php)
<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "examenes";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar los datos del formulario
$nombre = $_POST["nombre"];
$calificacion = $_POST["calificacion"];

// Sentencia SQL para insertar los datos
$sql = "INSERT INTO calificaciones (nombre, calificacion) VALUES ('$nombre', '$calificacion')";

// Ejecutar la sentencia SQL
if ($conn->query($sql) === TRUE) {
    echo "Calificación guardada con éxito!";
} else {
    echo "Error al guardar la calificación: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

<?php
$user = "root";
$pass = "";
$server = "localhost";
$data = "srburger";

// Crear una nueva conexión
$mysql = new mysqli($server, $user, $pass, $data);

// Verificar conexión
if ($mysql->connect_error) {
    die("No hubo conexión: " . $mysql->connect_error);
}

// Recoger datos del formulario
$documento = trim($_POST["documento"]);
$Nombre = trim($_POST["Nombre"]);
$email = trim($_POST["email"]);
$telefono = trim($_POST["telefono"]);
$fecha = $_POST["fecha"];
$genero = $_POST["genero"];
$mensaje = trim($_POST["mensaje"]);
$terminos = isset($_POST["TerminosYCondiciones"]) ? 1 : 0; // Usar el nombre correcto

// Validaciones
if (empty($documento) || empty($Nombre) || empty($email) || empty($telefono) || empty($fecha) || empty($mensaje) || !$terminos) {
    die('Todos los campos son obligatorios y debes aceptar los términos y condiciones.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('El correo electrónico no es válido.');
}

if (!DateTime::createFromFormat('Y-m-d', $fecha)) {
    die('La fecha de nacimiento no es válida.');
}

$fecha_nacimiento = new DateTime($fecha);
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento)->y;

if ($edad < 18) {
    die('Debes tener al menos 18 años.');
}

// Preparar la consulta
$stmt = $mysql->prepare("INSERT INTO cliente (Documento, Nombre, Correo, Telefono, FechaNacimiento, Genero, Mensaje, TerminosYCondiciones) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt) {
    // Enlazar parámetros
    $stmt->bind_param("ssssssis", $documento, $Nombre, $email, $telefono, $fecha, $genero, $mensaje, $terminos);

    // Ejecutar consulta
    if ($stmt->execute()) {
        echo "Datos Insertados";
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    echo "Error en la preparación de la consulta: " . $mysql->error;
}

// Cerrar la conexión
$mysql->close();
?>
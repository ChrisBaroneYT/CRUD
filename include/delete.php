<?php
$user = "root";
$pass = "";
$server = "localhost";
$data = "srburger";

// Crear una conexión con la base de datos
$mysqli = new mysqli($server, $user, $pass, $data);

// Verificar si hubo un error en la conexión
if ($mysqli->connect_error) {
    die("Lo siento, no hay conexión: " . $mysqli->connect_error);
}

// Verificar si el formulario ha sido enviado y si el campo Documento está presente
if (isset($_POST['Documento']) && !empty($_POST['Documento'])) {
    // Obtener el valor del campo Documento
    $borrar = $_POST['Documento'];

    // Preparar la consulta SQL
    $sql = "DELETE FROM cliente WHERE Documento = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        // Enlazar parámetros
        $stmt->bind_param("s", $borrar);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Los datos fueron borrados correctamente";
        } else {
            echo "Error al borrar los datos: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $mysqli->error;
    }
} else {
    echo "Por favor, ingrese un documento para borrar.";
}

// Cerrar la conexión
$mysqli->close();
?>
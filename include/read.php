<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(../image/fondo.jpg);
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 20px;
            width: 90%;
            max-width: 1200px;
        }
        h2 {
            color: #333;
            background-color: #e0e0e0; /* Fondo gris claro para el h2 */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            background-color: #f9f9f9; /* Fondo gris muy claro para el párrafo */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: small;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="button"] {
            padding: 10px 20px;
            font-size: medium;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        input[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Mostrar datos de Contacto</h2>
        <p>Estos son los datos de contactos encontrados en la Base de Datos</p>
        <table>
            <tr>
                <th width="180">Documento</th>
                <th width="180">Nombre</th>
                <th width="180">Correo</th>
                <th width="180">Numero</th>
                <th width="180">Fecha de Nacimiento</th>
                <th width="180">Genero</th>
                <th width="180">Mensaje</th>
                <th width="180">TerminosYCondiciones</th>
            </tr>
            <?php
            $user = "root";
            $pass = "";
            $server = "localhost";
            $data = "srburger";

            // Crear una conexión con la base de datos
            $mysqli = new mysqli($server, $user, $pass, $data);

            // Verificar si hubo un error en la conexión
            if ($mysqli->connect_error) {
                echo "Lo siento, no hay conexión. <br>";
                echo "Error: Fallo al conectarse a MySQL debido a: <br>";
                echo "Error: " . $mysqli->connect_error . "<br>";
                exit;
            } else {
                $sql = "SELECT * FROM cliente";
                $result = $mysqli->query($sql);

                // Verificar si se obtuvieron resultados
                if ($result->num_rows > 0) {
                    // Imprimir cada fila de datos en la tabla
                    while ($mostrar = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['Documento']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['Nombre']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['Correo']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['Telefono']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['FechaNacimiento']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['Genero']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['Mensaje']) . "</td>";
                        echo "<td width='180'>" . htmlspecialchars($mostrar['TerminosYCondiciones']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No se encontraron registros.</td></tr>";
                }

                $mysqli->close();
            }
            ?>
        </table>
        <br>
        <input type="button" value="Regresar" onclick="history.go(-1);">
    </div>
</body>
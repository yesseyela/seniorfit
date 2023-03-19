<!DOCTYPE html>
<html>
  <head>
    <title>Añadir ejercicio - Entrenador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style_trainer.css">
  </head>
  <body>
    <div>
    <?php include 'base_trainer.php'; ?>
    </div>
    <div class="cointainer">
        <h1>Entrenador</h1>
        <h2>Bienvenido, [nombre del entrenador]</h2>
        <form method="post" action="buscar_ejercicios.php" class="form-inline">
            <div class="form-group">
                <label for="busqueda">Buscar por nombre:</label>
                <input type="text" class="form-control" id="busqueda" name="busqueda">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <table>
        <thead>
            <tr>
            <th>Nombre del ejercicio</th>
            <th>Última fecha de adición</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "myDB";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Consulta a la base de datos
            $sql = "SELECT id, nombre, fecha_adicion, habilitado FROM ejercicios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Mostrar los resultados en la tabla
                while($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $nombre = $row["nombre"];
                    $fecha_adicion = $row["fecha_adicion"];
                    $habilitado = $row["habilitado"];

                    // Mostrar el nombre y la fecha de adición
                    echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $fecha_adicion . "</td>";

                    // Mostrar el botón para habilitar o deshabilitar el ejercicio
                    echo "<td>";
                    if ($habilitado == 1) {
                        echo "<form method='post' action='deshabilitar_ejercicio.php'>";
                        echo "<input type='hidden' name='id' value='" . $id . "'>";
                        echo "<button type='submit' class='btn btn-danger'>Deshabilitar</button>";
                        echo "</form>";
                    } else {
                        echo "<form method='post' action='habilitar_ejercicio.php'>";
                        echo "<input type='hidden' name='id' value='" . $id . "'>";
                        echo "<button type='submit' class='btn btn-success'>Habilitar</button>";
                        echo "</form>";
                    }
                    echo "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </tbody>
        </table>
    </div>
    </body>
</html>

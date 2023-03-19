<!DOCTYPE html>
<html>
  <head>
    <title>Inicio - Entrenador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style_trainer.css">
  </head>
  <body>
    <div>
    <?php include 'base_trainer.php'; ?>
    </div>
    <div class="container">
        <h1>Entrenador</h1>
        <h2>Bienvenido, [nombre del entrenador]</h2>
        <form method="post" action="buscar_adultos.php" class="form-inline">
            <div class="form-group">
                <label for="busqueda">Buscar por nombre:</label>
                <input type="text" class="form-control" id="busqueda" name="busqueda">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Género</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>Última Fecha de Ejercicio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Aquí se muestra la información de los adultos mayores registrados
                    // Para este ejemplo, se usa una variable $result que contiene los resultados de una consulta a la base de datos
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['edad'] . "</td>";
                        echo "<td>" . $row['fecha_nacimiento'] . "</td>";
                        echo "<td>" . $row['genero'] . "</td>";
                        echo "<td>" . $row['telefono'] . "</td>";
                        echo "<td>" . $row['correo_electronico'] . "</td>";
                        echo "<td>" . $row['fecha_ultimo_ejercicio'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body

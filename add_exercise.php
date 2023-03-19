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
    <div class="container">
      <h1>Entrenador</h1>
      <h2>Bienvenido, [nombre del entrenador]</h2>
        <form method="post" action="add_exercise.php" class="form-inline">
            <div class="form-group">
                <label for="exercise">Nombre del ejercicio:</label>
                <input type="text" class="form-control" id="exercise" name="exercise">
            </div>
            <button type="submit" class="btn btn-default">Agregar</button>
        </form>
      <table>
        <thead>
          <tr>
            <th>Nombre del ejercicio</th>
            <th>Última fecha de adición</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Conectar a la base de datos
            $conexion = mysqli_connect("localhost", "usuario", "contraseña", "nombre_de_la_base_de_datos");
            
            // Verificar si la conexión fue exitosa
            if (!$conexion) {
              die("Conexión fallida: " . mysqli_connect_error());
            }
            
            // Obtener los ejercicios registrados
            $sql = "SELECT * FROM ejercicios";
            $result = mysqli_query($conexion, $sql);
            
            // Mostrar los ejercicios en la tabla
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["fecha_adicion"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='2'>No se encontraron ejercicios registrados.</td></tr>";
            }
            
            // Cerrar la conexión a la base de datos
            mysqli_close($conexion);
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>


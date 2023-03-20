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
        <form method="post" action="add_exercise1.php" class="form-inline"> <!--añade los ejercicios en la tabla ejercicios-->
            <div class="form-group">
                <label for="exercise">Nombre del ejercicio:</label>
                <input type="text" class="form-control" id="exercise" name="exercise">
            </div>
            <button type="submit" class="btn btn-default">Agregar</button>
        </form>
        <br>
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
          include 'conecta.php';
          $bd = conectar();
          $query = "SELECT * FROM ejercicios";
          $result = mysqli_query($bd, $query);
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['nombre_ejercicio'] . "</td>";
              echo "<td>" . $row['fecha_adicion'] . "</td>";
              echo "<td><a href='delete_exercise.php?id=" . $row['id_ejercicio'] . "'>Eliminar</a>
              |<a href='imagen.php?id=" . $row['id_ejercicio'] . "'>Imagen</a></td>";
              ///no funciona el link de imagen
              echo "</tr>";
          }
          mysqli_close($bd);
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>


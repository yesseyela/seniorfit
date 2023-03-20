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
    </div> <!--- no se comohacer la relacion ejercicio adulto mayor-->
    <div class="cointainer">
        <h1>Entrenador</h1>
        <h2>Bienvenido, [nombre del entrenador]</h2>
        <form method="post" action="asignar_ejercicio.php">
        <table>
        <thead>
            <tr>
            <th>Nombre del ejercicio</th>
            <th>Habilitado</th>
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
              // Mostrar un checkbox para habilitar/deshabilitar el ejercicio
              echo "<td><input type='checkbox' name='ejercicio_" . $row['id_ejercicio'] . "' value='1'></td>";
              echo "</tr>";
            }
            mysqli_close($bd);
           ?>
        </tbody>
        </table>
        <input type="submit" value="Guardar cambios">
        </form>
    </div>
    </body>
</html>

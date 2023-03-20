<!DOCTYPE html>
<html>
  <head>
    <title>Actividades - Adulto Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style_activities.css">
  </head>
  <body>
    <div>
    <?php include 'base_adulto.php'; ?>
    </div>
    <div class="cointainer">
        <h1> Registro de Actividades</h1>
        <h2>Bienvenido, [nombre del adulto mayor]</h2>
        <table>
        <thead>
            <tr>
            <th>Nombre del ejercicio</th>
            <th>Listo</th>
            </tr>
        </thead>
        <tbody>
           <?php
            include 'conecta.php';
            $bd = conectar();

            // de aaqui naaa funciona pero tengo el modelo
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
        </table>
        <input type="submit" value="Guardar cambios">
    </div>

    </body>
</html>
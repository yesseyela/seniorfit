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
        <h2>Bienvenido, <?php echo $_SESSION['nombre_entrenador']; ?></h2> <!-- Mostrar el nombre del entrenador  no-->
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Género</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conecta.php';
                $bd = conectar();
                $query = "SELECT * FROM usuarios WHERE tipo_usuario = 'Adulto Mayor'";
                $result = mysqli_query($bd, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['edad'] . "</td>";
                    echo "<td>" . $row['fecha_nacimiento'] . "</td>";
                    echo "<td>" . $row['genero'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body

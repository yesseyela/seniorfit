<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - SENIOR FIT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style_perfil.css">
</head>
<body>
    <div>
    <?php include 'base_trainer.php'; ?>
    </div>
    <table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //FALTA HACER Q TRAIGA LA INFO DE EL USUARIO Q ESTAABIERTO SESION
                include 'conecta.php';
                $bd = conectar();
                $query = "SELECT * FROM usuarios Where tipo_usuario = 'Entrenador'";
                $result = mysqli_query($bd, $query);
                while ($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "<td>" . $row['cedula'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td><a href='editar_perfil.php?cedula=" . $row['cedula'] . "'>Editar</a></td>";
                    echo "</tr>";
                endwhile;
                // Cerrar la conexión a la base de datos
                mysqli_close($bd);
            ?>
        </tbody>
    </table>
</body>
</html>

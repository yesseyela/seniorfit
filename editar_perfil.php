<?php
include 'conecta.php';
$bd = conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = mysqli_real_escape_string($bd, $_POST['cedula']);
    $nombre = mysqli_real_escape_string($bd, $_POST['nombre']);
    $email = mysqli_real_escape_string($bd, $_POST['email']);
    $password = mysqli_real_escape_string($bd, $_POST['password']);

    $query = "UPDATE usuarios SET nombre='$nombre', email='$email', password='$password' WHERE cedula='$cedula'";
    $result = mysqli_query($bd, $query);

    if ($result) {
        echo "<script>alert('Los cambios han sido guardados correctamente.');</script>";
    } else {
        echo "<script>alert('Ha ocurrido un error al guardar los cambios.');</script>";
    }

    // Redirigir al usuario a la página de perfil
    header("refresh:0");
    exit;
} else {
    // Mostrar el formulario de edición
    //$cedula = $_SESSION['cedula'];
    //toca hacer los cambios segun quien inicia sesion eso aja
    $cedula = mysqli_real_escape_string($bd, $_GET['cedula']);
    $query = "SELECT * FROM usuarios WHERE cedula = '$cedula'";
    $result = mysqli_query($bd, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style_perfil.css">
    <title>Editar perfil</title>
</head>
<body>
    <h1>Editar perfil</h1>
    <form method="POST">
        <input type="hidden" name="cedula" value="<?php echo $row['cedula']; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
        <label>Correo electrónico:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <label>Contraseña:</label>
        <input type="password" name="password" value="<?php echo $row['password']; ?>"><br>
        <button type="submit">Guardar cambios</button>
    </form>
    <br>
    <a href="index.php">Cerrar sesion</a>
</body>
</html>
<?php
mysqli_close($bd);
}
?>

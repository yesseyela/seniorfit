<!DOCTYPE html>
<html>
  <head>
    <title>Iniciar sesión como entrenador</title>
    <link rel="stylesheet" href="style/style_login.css">
  </head>
  <body>
    <h1>Iniciar sesión como entrenador</h1>
    <form method="post" action="trainer_login.php">
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email">
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" >


    </form>
    <a href="trainer_home.php"><input type="submit" value="Iniciar sesión"></a>
    <p>¿No tienes una cuenta? <a href="register.php">Regístrate</a></p>

    <div class="volver">
      <a href="index.php"><button>Volver al inicio</button></a>
    </div>
  </body>
</html>

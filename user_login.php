<!DOCTYPE html>
<html>
  <head>
    <title>Iniciar sesión como adulto mayor</title>
    <style>
      /* Estilos CSS para la página */
      body {
        font-family: Arial, sans-serif;
      }
      h1 {
        text-align: center;
      }
      form {
        width: 300px;
        margin: 0 auto;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
  <h1>Iniciar sesión a seniorfit</h1>
    <form method="post" action="login.php">
      <label for="nombre_usuario">Nombre de usuario:</label>
      <input type="text" id="nombre_usuario" name="nombre_usuario" required>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Iniciar sesión</button>
    </form>
    <p>¿No tienes una cuenta? <a href="register.php">Regístrate</a></p>
    <div class="volver">
      <a href="index.php"><button>Volver al inicio</button></a>
    </div>
</body>
</html>

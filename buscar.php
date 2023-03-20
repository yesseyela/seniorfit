<!DOCTYPE html>
<html>
  <head>
    <title>Busqueda - Entrenador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style_trainer.css">
  </head>
  <body>
    <div>
    <?php include 'base_trainer.php'; ?>
    </div>
    <div class="cointainer">
        <h1>Entrenador</h1>
        <h2>Bienvenido, [nombre del entrenador]</h2>
        <form method="post" action="busqueda.php" class="form-inline">
            <div class="form-group">
                <label for="busqueda">Buscar por nombre:</label>
                <input type="text" class="form-control" id="busqueda" name="busqueda" required>
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        </form>
    </div>
    </body>
</html>

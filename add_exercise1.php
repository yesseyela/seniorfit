<?php
    include 'conecta.php';
    $bd = conectar();

    $nombre_ejercicio = $_POST['exercise'];

    $query = "INSERT INTO ejercicios (nombre_ejercicio) VALUES ('$nombre_ejercicio')";
    mysqli_query($bd, $query);
    header('Location: add_exercise.php');
    mysqli_close($bd);
?>

<?php
include 'conecta.php';
$bd = conectar();

    if (isset($_GET['id'])) { 
        $id = $_GET['id'];
        $query = "DELETE FROM ejercicios WHERE id_ejercicio = $id"; 
        mysqli_query($bd, $query);
    }

    mysqli_close($bd);
    header("Location: add_exercise.php"); 
    exit;
?>

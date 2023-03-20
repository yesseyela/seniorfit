
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Comandos</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include("conecta.php");
            $bd = conectar();
            $nom = $_REQUEST["busqueda"];
            $sql = "select cedula, nombre from usuarios where nombre like '%$nom%'";
            $datos = mysqli_query($bd,$sql);
            $c=0;
            while($arr = mysqli_fetch_array($datos)){
                echo "<tr>";
                echo "<td>$arr[nombre]</td>";
                echo "<td><a href='asing_exercise.php?cedula=$arr[cedula]'>Asignar ejercicio</a>";
                echo " - <a href='reporte_trainer.php?cedula=$arr[cedula]' target='_blank'>Reporte</a></td>";
                echo "</tr>"; 
                $c++;
            }
            mysqli_close($bd);
        ?>
    </tbody>
</table>

<?php
    echo "<br><i>Total de registros encontrados: $c</i>";
?>
    
        </div>
        </body>
</html>
<?php
require "./src/Conexion.php";
require "./src/Partido.php";
require "./src/EquipoLocal.php";

  $p=new EquipoLocal();
  $p->conectar();
  $resultado=$p->listarEquipos();
  



?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "menu.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <table>
      <tr>
        <th>ID</th>
        <th>Categoria</th>
        <th>Num Jugadores</th>
        <th>Sexo</th>
        <th>Nombre entrenador</th>
      </tr>
      <?php
        foreach ($resultado as $p) {
          echo "<tr>";
          echo "<td>".$p['id']."</td>";
          echo "<td>".$p['categoria']."</td>";
          echo "<td>".$p['num_jugadores']."</td>";
          echo "<td>".$p['sexo']."</td>";
          echo "<td>".$p['nombreEntrenador']."</td>";
          echo "</tr>";
        }
        ?>
      </table>
  </body>
</html>

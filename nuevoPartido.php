<?php
require "./src/Conexion.php";
require "./src/Partido.php";
require "./src/EquipoLocal.php";


$p=new Partido();
$p->conectar();
$resultado=$p->listarPartidos();

$error=$p->comprobarCampos($_POST);

if(isset($error)){
    if($error===false){
      //NO HAY ERROR
      $p->conectar();
      $p->insertarPartido();
    }
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php include "menu.php"; ?>
     <table>
       <tr>
         <th>ID equipo local</th>
         <th>ID equipo visitante</th>
         <th>goles local</th>
         <th>goles visitante</th>
         <th>vencedor</th>
       </tr>
       <?php
         foreach ($resultado as $p) {
           echo "<tr>";
           echo "<td><a href=./equipolocal.php?id_equipoLocal=".$p['id_equipoLocal'].">".$p['id_equipoLocal']."</td>";
           echo "<td>".$p['id_equipoLocal']."</td>";
           echo "<td>".$p['id_equipoVisitante']."</td>";
           echo "<td>".$p['golesLocal']."</td>";
           echo "<td>".$p['golesVisitante']."</td>";
           echo "<td>".$p['vencedor']."</td>";
           echo "</tr>";
         }
         ?>
       </table>
   </body>
 </html>

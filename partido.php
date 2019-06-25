<?php
require "./src/Conexion.php";
require "./src/Partido.php";
require "./src/EquipoLocal.php";

  $p=new Partido();
  $error=$p->comprobarCampos($_POST);

  if(isset($error)){
      if($error===false){

        $p->conectar();
        $p->insertarPartido();
      }
  }
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
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- Formulario de insercion -->
    <h2>Nuevo Partido</h2>
    <form class="info" action="nuevoPartido.php" method="post">
      <div class="info">
        <label for="id_equipoLocal"></label>
        <span class="formLabel">ID Local</span>
        <input type="text" name="id_equipoLocal" value="">
      </div>
      <div class="info">
        <label for="id_equipoVisitante"></label>
        <span class="formLabel">ID Visitante</span>
        <input type="text" name="id_equipoVisitante" value="">
      </div>
      <div class="info">
        <label for="golesLocal"></label>
        <span class="formLabel">Goles local</span>
        <input type="text" name="golesLocal" value="">
      </div>
      <div class="info">
        <label for="golesVisitante"></label>
        <span class="formLabel">Goles  Visitante</span>
        <input type="text" name="golesVisitante" value="">
      </div>
      <input type="submit" name="" value="Insertar">
    </form>
  </body>
</html>

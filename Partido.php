<?php
/**
 *
 */
class Partido extends Conexion
{
  private $id_equipoLocal;
  private $id_equipoVisitante;
  private $golesLocal;
  private $golesVisitante;
  private $vencedor;


  function __construct()
  {

  }
  public function listarPartidos()
  {
    $consulta="SELECT * from partido";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["id_equipoLocal"])||!isset($post["id_equipoVisitante"])||!isset($post["golesLocal"])||!isset($post["golesVisitante"])||!isset($post["vencedor"])){
      $error="";
    }elseif($post["id_equipoLocal"]==""){
      header('Location: partido.php');
      echo "ID equipo local no introducido";
    }elseif($post["id_equipoVisitante"]==""){
      header('Location: partido.php');
      echo "ID equipo visitante no introducido";
    }else if($post["golesLocal"]==""){
      header('Location: partido.php');
      echo "Goles equipo local no introducido";
    }elseif($post["golesVisitante"]==""){
      header('Location: partido.php');
      echo "Goles equipo visitante no introducido";
    }elseif($post["vencedor"]==""){
      header('Location: partido.php');
      echo "Vencedor no introducido";
    }else{
      $error=false;
      $this->id_equipoLocal=$post["id_equipoLocal"];
      $this->id_equipoVisitante=$post["id_equipoVisitante"];
      $this->golesLocal=$post["golesLocal"];
      $this->golesVisitante=$post["golesVisitante"];
      $this->vencedor=$post["vencedor"];
    }
    return $error;
  }

  public function insertarPartido($id_equipoLocal, $id_equipoVisitante, $golesLocal, $golesVisitante, $vencedor){

    $consulta="INSERT INTO partido (id_equipoLocal, id_equipoVisitante, golesLocal, golesVisitante, vencedor)
                VALUES ($this->id_equipoLocal, $this->id_equipoVisitante, $this->golesLocal, $this->golesVisitante, $this->vencedor)";
    $this->conexion->query($consulta);

  }

}
 ?>

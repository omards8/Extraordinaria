<?php
/**
 *
 */
class EquipoLocal extends Conexion
{
  private $id;
  private $categoria;
  private $num_jugadores;
  private $sexo;
  private $nombreEntrenador;


  function __construct()
  {

  }

    public function listarEquipos()
    {
      $consulta="SELECT * from equipolocal";
      $resultado=$this->conexion->query($consulta);
      return $resultado;
    }

    public function listarEquiposID($id_equipoLocal)
    {
      $consulta="SELECT * from equipolocal where id_equipoLocal=".$id_equipoLocal;
      $resultado=$this->conexion->query($consulta);
      return $resultado;
    }

}
 ?>

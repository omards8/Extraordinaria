<?php
/**
 *
 */
class Conexion
{
  public $conexion=null;
  private $servidor;
  private $bbdd;
  private $usuario;
  private $password;

  function __construct($servidor, $bbdd, $usuario, $password)
  {

  }
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "partidos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
public function setServidor($servidor)
{
  $this->servidor = $servidor;
}

public function getServidor()
{
  return $this -> servidor;
}
public function setBBDD($bbdd)
{
  $this->bbdd = $bbdd;
}

public function getBBDD()
{
  return $this -> bbdd;
}
public function setUsuario($usuario)
{
  $this->usuario = $usuario;
}

public function getUsuario()
{
  return $this -> usuario;
}
public function setPassword($password)
{
  $this->password = $password;
}

public function getPassword()
{
  return $this -> password;
}

}

 ?>

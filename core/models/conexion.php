<?php

class Conexion extends mysqli
{

  public function __construct()
  {
    parent::__construct('localhost','root','123','d');
    $this->connect_errno ? die('Error en la conexión a la base de datos') : null;
    $this->set_charset("utf8");
  }

  public function rows($query)
  {
    return mysqli_num_rows($query);
  }

  public function free_R($query)
  {
    return mysqli_free_result($query);
  }

  public function fetch_A($query)
  {
    return mysqli_fetch_array($query);
  }

  public function fetch_O($query)
  {
    return mysqli_fetch_object($query);
  }

}

?>

<?php

/*if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
  echo 'No has activado la extension de mysqli!!!';
} else {
  echo 'Si se tiene la extension mysqli!';
}*/

class Conexion{

private $db_host="localhost";
private $db_usuario="root";
private $db_contraseña="1234";
private $db_nombre="mbp_db";

private $conexion;



public function ConectarBD(){
  

  $this->conexion=new mysqli($this->db_host,$this->db_usuario,$this->db_contraseña,$this->db_nombre);

  if($this->conexion->connect_errno)
  {
    echo "Fallo en conectar a la base de datos mysql:";
    return;

  }

else{
  $this->conexion->set_charset("utf8");
  return $this->conexion;
}
}


private $db_hostCloud="bd2brjaxebnuhixtyivi-mysql.services.clever-cloud.com";
private $db_usuarioCloud="u15ceyepblnbu2dc";
private $db_contraseñaCloud="7tctDsKxZcbKaqwTzR2U";
private $db_nombreCloud="bd2brjaxebnuhixtyivi";

private $conexionCloud;

public  function ConectarBDCloud(){

  $this->conexionCloud=new mysqli($this->db_hostCloud,$this->db_usuarioCloud,$this->db_contraseñaCloud,$this->db_nombreCloud);

  if($this->conexionCloud->connect_errno)
  {
    echo "Fallo en conectar a la base de datos mysql:";
    return;

  }

else{
  $this->conexionCloud->set_charset("utf8");
  return $this->conexionCloud;
}

}




}




?>
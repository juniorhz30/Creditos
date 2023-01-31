<?php
require "conexion.php";

class usuario_model extends conexion{


public function getUsuarios(){


        $consulta="Select * from usuario";
        
        $conexion= parent::ConectarBD();
        

         $result=$conexion->query($consulta);
     
        
        while($fila=$result->fetch_assoc())
        {
          echo  $fila["id_usuario"];
          echo  $fila["usuario"];
          echo  $fila["contraseña"];
        }

        
        }
        
  


public function getUsuario($nombre){

    $consulta="Select * from usuario where usuario='$nombre'";

    $conexion= parent::ConectarBD();
    

     $result=$conexion->query($consulta);

     $fila=$result->fetch_assoc();

        echo  $fila["id_usuario"];
        echo  $fila["usuario"];
        echo  $fila["contraseña"];

    }
    



public function  crearUsuario($usuario,$contraseña){

    $consulta="Insert into  usuario(usuario,contraseña) values ('$usuario','$contraseña')";
    $conexion= parent::ConectarBD();
    $result=$conexion->query($consulta);


}


public function eliminarUsuario($id){


    $consulta="delete from usuario where id_usuario='$id'";
    $conexion= parent::ConectarBD();
    $result=$conexion->query($consulta);


}




}



?>
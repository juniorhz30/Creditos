<?php
require "conexion.php"; 

class prestatario_model extends conexion{


public function crearPrestamo($nombre,$apellidos,$foto,$ciudad,$correo,$certificado,$valorfiscal,$valorcomercial,$montosolicitado,$motivo){

    $consulta="Insert into bd2brjaxebnuhixtyivi.prestatario(nombres,apellidos,foto,ciudad,correo,certificado,valor_fiscal,valor_comercial,monto_solicitado,motivo) values ('$nombre','$apellidos','$foto','$ciudad','$correo','$certificado','$valorfiscal','$valorcomercial','$montosolicitado','$motivo')";
    
    echo 'se incerto y llego aqui';

    $conexion= parent::ConectarBDCloud();

   
    $result=$conexion->query($consulta);

   
}




public function getBinario($binarioimagen)
{
    $conexion= parent::ConectarBDCloud();

    $binarioImagen=mysqli_escape_string($conexion,$binarioimagen);

    return $binarioImagen;
}

}
?>
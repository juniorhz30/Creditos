<?php 
require '../Fomulario/modelo/prestatario_model.php';


if(isset($_REQUEST['enviar']))
{

  $nombre=$_POST['nombres'];
  $apellidos=$_POST['apellidos'];
  $ciudad=$_POST['Ciudad'];
  $correo=$_POST['Correo'];
  $valorfiscal=$_POST['valorfiscal'];
  $valorcomercial=$_POST['valorcomercial'];
  $montosolicitado=$_POST['monto'];
  $motivo=$_POST['motivo'];


   $prestatario_model= new  prestatario_model();
  

   

   if(isset($_FILES['foto']['name']) && isset($_FILES['certificado']['name']))
   {

   
    $sizeArchivo=$_FILES['foto']['size'];
    $imagenSubida=fopen($_FILES['foto']['tmp_name'],'r');
    $binarioImagen=fread($imagenSubida,$sizeArchivo);
    $foto=$prestatario_model->getBinario($binarioImagen);

    
    $certificadosizeArchivo=$_FILES['certificado']['size'];
    $certificadoimagenSubida=fopen($_FILES['certificado']['tmp_name'],'r');
    $certificadobinarioImagen=fread($certificadoimagenSubida,$certificadosizeArchivo);
    $certificado=$prestatario_model->getBinario($certificadobinarioImagen);

    $prestatario_model->crearPrestamo($nombre,$apellidos,$foto,$ciudad,$correo,$certificado,$valorfiscal,$valorcomercial,$montosolicitado,$motivo);

    
}
header("Location: index.php");
}
?>

<!DOCTYPE html>

<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='formulario.css'>
    <script src='main.js'></script>
</head>



<body>

    <div id="formularioModal" class="contenedor-formulario">
    <a  class="btn-cerrar"  href="/Fomulario/index.php">X</a>
        
      <form  method="post"  action="/Fomulario/formulario.php" class="formulario" enctype="multipart/form-data">

        <div class="formpart1">
         
         <div class="campo">
             <label class="label-form" for="nombres">Nombres:</label>
             <input class="input-form" type="text" name="nombres">
         </div>
         <div class="campo">
             <label class="label-form" for="apellidos">Apellidos:</label>
             <input class="input-form" type="text" name="apellidos">
         </div>
         <div class="campo">
             <label class="label-form" for="foto">Fotografía de la cedula:</label>
             <input class="file-form" type="file" name="foto" required>
         </div>

         <div class="campo">
             <label class="label-form" for="Ciudad">Ciudad:</label>
             <input class="input-form" type="text" name="Ciudad">
         </div>
         <div class="campo">
             <label class="label-form" for="Correo">Correo:</label>
             <input class="input-form" type="email" name="Correo">
         </div>

       
            
       

            <div class="campo">
                <label class="label-form" for="certificado">Certificado de tradición de inmueble:</label>
                <input class="file-form" type="file" name="certificado" >
            </div>
            </div>
         
            
         <div class="formpart2">
            <div class="campo">
                <label class="label-form" for="valorfiscal">Valor fiscal del inmueble:</label>
                <input class="input-form" type="text" name="valorfiscal">
            </div>

           
            <div class="campo">
                <label class="label-form" for="valorcomercial">Valor comercial del inmueble:</label>
                <input class="input-form" type="text" name="valorcomercial">

            </div>

            
            <div class="campo">
                <label class="label-form" for="monto">Monto a solicitar:</label>
                <input class="input-form" type="text" name="monto">
            </div>

            <div class="campo campo__check">
                <label class="label-form" for="autorizacion" >Autorización de verificación de datos ante entidades de
                    riesgo :</label>
                <input class="check-form" type="checkbox" name="autorizacion" value="autorizacion" /> 
            </div>
            <div class="campo campo__areatexto">
                <label class="label-form" for="motivo">Motivo de prestamo:</label>
                <textarea class="form-textarea" type="text" name="motivo"></textarea>
            </div>
            
          

            
            <input class="btn-envio" type="submit" name="enviar" value="Enviar"/>
        
        
        </form>

    </div>




</body>




</html>
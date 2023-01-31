

let $monto= document.querySelector(".input__monto");
let $valormonto= document.querySelector(".valor-monto");
let $tabla=document.querySelector(".tabla");

let $botonSolicitar=document.querySelector(".btn-solicitar");
let $formulario=document.querySelector("#formularioModal");



//arranque de la apliaccion tabla vacia:
window.addEventListener("load",function(){
    
    $tabla.innerHTML="<table style='width:100%'><th style='width:75%'></th><th></th><tr><td>Tasa :</td><td>2.11%</td></tr><tr><td>Monto :</td> <td>"+Math.floor($monto.value).toFixed(2)+"$</td> </tr><td>Admin :</td><td>"+($monto.value*0.44).toFixed(2)+"$</td></tr><tr><td>IVA :</td><td>"+(($monto.value*0.44)*0.19).toFixed(2)+"$</td></tr><tr><td>Cuotas :</td><td> 3 </td></tr><tr><td>Interes :</td><td>"+ ($monto.value*0.0211).toFixed(2)+"$</td></tr></table>";

})


//slider

$monto.addEventListener("input",function(){

   
    let progressporcent=($monto.value*100/$monto.getAttribute("max"));
    let $labelMonto=document.createElement("p");

    $labelMonto.innerHTML=$monto.value;

    $monto.setAttribute("style","background:linear-gradient(90deg,#BF3459 "+progressporcent+"%,rgb(221, 208, 223) "+(progressporcent)+"%)");

    $valormonto.innerHTML="$/  "+Math.floor($monto.value).toFixed(2);



    //llenar datos:

$tabla.innerHTML="<table style='width:100%'><th style='width:75%'></th><th></th><tr><td>Tasa :</td><td>2.11%</td></tr><tr><td>Monto :</td> <td>"+Math.floor($monto.value).toFixed(2)+"$</td> </tr><td>Admin :</td><td>"+($monto.value*0.44).toFixed(2)+"$</td></tr><tr><td>IVA :</td><td>"+(($monto.value*0.44)*0.19).toFixed(2)+"$</td></tr><tr><td>Cuotas :</td><td> 3 </td></tr><tr><td>Interes :</td><td>"+ ($monto.value*0.0211).toFixed(2)+"$</td></tr></table>";


})


//recibir pagina

$botonSolicitar.addEventListener("click", async function(){

   let $divform=document.querySelector('.contenedor-modal');



  let data= await fetch("/Fomulario/formulario.php");
  let text=  await data.text();
   
 
let $divformtemp=document.createElement("div");

 $divformtemp.innerHTML=text;

 let $form=$divformtemp.querySelector("#formularioModal")
 console.log( $divformtemp);
 $form.classList.toggle("modal");

 $divform.appendChild($form);

})



//crear modal


let $cerrarModal= document.querySelector(".btn-cerrar");

$cerrarModal.addEventListener("click",function(){

    let $form=document.querySelector("#formularioModal");
    $form.innerHTML="";


})





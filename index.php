<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CalculadoraCreditos.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='formulario.css'>
</head>

<body>


<div class="nav">

 <ul class="menu">
 <li class="menu__item"><a class="menu__item__link" href="#">MBP</a></li>
<li class="menu__item"><a class="menu__item__link" href="#" >Acerca de Nosotros</a></li>
<li class="menu__item"><a class="menu__item__link" href="#">Blogs</a></li>
</ul>

</div>


<div class="contenedor-principal">

<div class="contenedor-modal"></div>
<div class="Calculadora">

    <div class="valor-monto">
        <span>$/ 300</span>


    </div>


    <input class="input__monto" type="range" name="monto" min="300" value="0" max="20000" step="10"></input>


    <div class="tabla">
    </div>

    <a class="btn-solicitar" href="#">SOLICITAR CREDITO</a>

</div>



<div class="aside"></div>

</div>

</div>

<div class="footer">

    <p>Copyright ©2023 JHZ</p>
    <nav class="links">
        <a href="#">Terminos y condiciones</a>
        <a href="#">Política de privacidad</a>
        <a href="#">Contacto</a>
    </nav>

</div>

</body>
<script src='Calculadora.js'></script>

</html>
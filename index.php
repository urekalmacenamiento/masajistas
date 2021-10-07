<?php

$con=mysqli_connect("162.241.61.210","urekoffi_uprueba","cajarecepcion","urekoffi_prueba" )or die('database not connected');

	if($con){echo '';}
	else{echo 'Can not connect to database';}

/*crear anfitrion %
copiar ip estab 162.241.61.210

3306 puerto para base de datos de mysql*/


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */				
$link = mysqli_connect("162.241.61.210", "urekoffi_uprueba", "cajarecepcion", "urekoffi_prueba");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/*
//			  table_name  	column1=value1				  column_name=col_name
$sql = "UPDATE tabla1 SET descripcion='no mnchs' WHERE clavepaciente=1";
if(mysqli_query($link, $sql)){
    echo "";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}		*/																				

/*mysqli_close($link);

echo, print, printf, print_r	*/

//The WHERE clause in the UPDATE statement specifies which record or records should be updated. If you omit the WHERE clause, all records will be updated.

?>


<?php/*

	date_default_timezone_set('America/Mexico_City');
	
	$host = '162.241.61.210';
	$username = 'urekoffi_uprueba';
	$password = "cajarecepcion";
	
	$connect = @mysqli_connect($host, $username, $password);
	
	$database = mysqli_select_db($connect, 'urekoffi_prueba');

	if($database){echo 'Connected';}
	else{echo 'Can not connect to database';}
	
*/

?>


<?php
/*
	$conexion=mysqli_connect('162.241.61.210','urekoffi_uprueba','cajarecepcion');

	if($conexion){echo 'Conectada';}
	else{echo 'Can not connect to database';}

*/
?>


<?php

/*
$host="162.241.61.210";
$user="urekoffi_uprueba";
$pass="cajarecepcion";
$db="urekoffi_prueba";

*/

?>



<!DOCTYPE html>

<html lang="es-MX">
<head>


<title>Urek eventos</title>


<meta charset="UTF-8">
<meta name="Urek eventos" content="Proyecto, metodología">
<meta http-equiv="refresh" content="300">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="estilo.css">

  <style>
		@import url("https://fonts.googleapis.com/css?family=Lato");
    	
	</style>

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!--temas-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--jqueryminued-->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!--jqueryui-->



    <!--adobefont <script src="http://webfonts.creativecloud.com/abel:n4:default.js" type="text/javascript"></script>
					<script>var adobewebfontsappname ="dreamweaver"</script>
					<script src="http://use.edgefonts.net/abel:n4:default.js" type="text/javascript"></script>
-->


</head>


<body>








<!--pendiente

 <a href="https://www.google.com"class="boton2">Enviar</a>


  <p><a href='imagenes/logo.png' target='_popup' style='color: #ff2f37;font-size:15px;' onclick="window.open('imagenes/logo.png','name','width=600,height=400')">Términos y condiciones</a></p>
	
  <p><a href='imagenes/logo.png' target='_popup' style='color: #ff2f37;font-size:15px;' onclick="window.open('imagenes/logo.png','name','width=600,height=400')">Política de privacidad</a> de Kiss</p>
	
    <p><a href="#C5" id="C4">Jump to end</a></p>	



 <p><a href="#C6">Jump to again</a></p>
 
 
 
 
 
 
 

<div class="contenedor">
<a href="html_demo.html#p01">Jump to Chapter 4 another page id</a>  referencia hast tag #p01 desde otra pagina
</div>

<div class="contenedor">
<p><a href="#C4"id="C6">Jump to paquete</a></p>	
</div>



 galeria
<div class="contenedor">
<a href="https://i.pinimg.com/originals/3e/06/d9/3e06d9a1ebae424d11ea0045d0b98d0a.jpg"> <img src="https://i.pinimg.com/originals/3e/06/d9/3e06d9a1ebae424d11ea0045d0b98d0a.jpg" alt="HTML tutorial" style="width:80px; height:80px; border:2px solid red;padding:0px;"> </a> <!-- Image as a link  --> <!-- style="max-width:100%;height:auto;"responsive image
</div>



 
 
 
 
 
 
   Bannertexto
  <div class="bannertexto1">


<h3>Paquetes especiales</h3>
<p>Música especial a la elección del cliente</p>
<br>
</div>
 
 
 
 
 
 
 
 
 
  <!--Bannertexto3
  <div class="bannertexto3">
<p> <!-- Paragraph
<p><b>This text is bold</b></p>
<p><strong>This text is</strong></p> <!-- like bold but important 
<p><i>This text is italic</i></p>
<p>This is<sub> subscript</sub> and <sup>superscript</sup></p>
<p><i>This is Italica</i></p>
<p><em>This is emphasized</em></p> <!-- emphasized, like italic but important 
<p><mark>This is marked</mark></p> <!-- Marked 
<p><small>This is small</small></p>
<p><del>This is crossed</del></p> <!-- Crossed --
<p><ins>This text is</ins></p> <!-- subraya -
<p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p><!-- comillas --
<p>The <abbr title="World Health Organization">WHO</abbr> was founded </p> <!-- Tooltip abbr --
<p><a href="html_images.asp">HTML Images</a> is a link to a page on this website.</p>
</div>



  <!--Bannertexto4
<div class="contenedor5">
<div class="bannertexto4">  You can specify background images for any visib
le HTML element.</div> <!-- Background image on an element -->



  <!--Bannertexto5
<div class="bannertexto5">
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
</div> 


<div class="contenedor">

<h1>My <span class="bannertexto4">Span</span> Heading</h1> <!--span or inline--
</div>

<div class="contenedor">
<p>This is an inline span <span style="border: 1px solid black">Hello World</span> element inside a paragraph.</p> <!--span or inline--
</div>
 
 
 
 
 
 
 
 
 
 <div style="float:left; color:brown; width:100%">
  <ul style="list-style-type:disc; "> <!-- Unordered list, disc/circle/square/none
  <li>Coffee</li>
  <li>Tea</li>
    <li>Coffee</li>
  <li>Tea</li>
  </ul>
 </div>

<div style="float:left; color:brown; width:100%">
<dl>  <!--Description list--
  <dt>Coffee</dt>
  <dd>La descripción va aquí</dd>
  <dt>Milk</dt>
  <dd>La otra descripción va aquí</dd>
</dl>
 </div>
 

 
 
 <div class="contenedorbanner">
 <audio controls>
<source src="audios/Water splashes.mp3" type="audio/mpeg">
<source src="horse.wav" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<audio src="audios/Water splashes.mp3" controls>
Your browser does not support the audio element.
</audio>
  </div>
 
 
 
 
 
 -->



  <!--Header-->
  <div class="header">
 	<a href="index.php">  <img src="imagenes/logo5.png" alt="W3Schools.com" class="logo"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
     


</a>



<ul class="menu">

  <li><a  href="index.php">Paquetes</a></li>
    <li><a href="paginas/galeria.html">Galería</a></li>
	<li><a href="paginas/servicios.html">Servicios</a></li>
	<li><a href="paginas/extra.html">Extra</a></li>
    <li><a  href="paginas/acerca.html">Acerca</a></li>
	<li><a href="paginas/contacto.html">Contacto</a></li>

</ul>




<ul class="menu" style="float:right;" id=login >
    <li style="padding-right:32px; "><a  href="paginas/logged.html">Entrar</a></li>

</ul>




  </div>
  
  
			
  
  <!--Banner-->
<a class="descuentolink" title="Aplicar ahora" href="https://wa.me/5213313036681?text=Hola,%20quiero%20apartar%20un%20servicio%20de%20musica"> 
 <div class="descuento">
<br>
<br>
<br>



Aplicar ahora un 10% de descuento en paquete mediano
 

  </div>
 </a> 
  
















						
  <div class="contenedor">
<div class="container">
  

 
  
  <!--Wrapper-->
  <div class="wrapper">
   
    <!--Block-->
    <div class="block">
     <p class="titularbox">Paquete básico
	 <br>$1,800</p>
	 </>
	  <a href="imagenes/basico.png" alt="imagen paquete básico" download><img src="imagenes/basico.png" alt="W3Schools.com" class="imagenesa"></a> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->





    </div>


    <!--Block-->
    <div class="block">
    <p class="titularbox">Paquete mediano
	<br>$2,500
	</p>
 	<a href="imagenes/mediano.png" alt="imagen paquete mediano" download><img src="imagenes/mediano.png" alt="W3Schools.com" class="imagenesa"></a> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
  
	
    </div>


    <!--Block-->
    <div class="block">
    <p class="titularbox">Paquete Big
	<br>$2,800</p>
	  <a href="imagenes/big.png" alt="imagen paquete big" download><img src="imagenes/big.png" alt="W3Schools.com" class="imagenesa"></a> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
	  
    </div>


    <!--Block-->
    <div class="block">
      <p class="titularbox">Otros <br>paquetes<br></p>
	 <a href="imagenes/karaoke.png" alt="imagen paquete karaoke" download> <img src="imagenes/karaoke.png" alt="W3Schools.com" class="imagenesa"></a> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
	  
    </div>
   
    
	
  </div>





<div class="contenedor"><div class="divisor"></div> </div> 



  <!--Banner2-->

  
  <a type="button" onclick="alert('Solicitud Whatsapp')" title="Cotización por whatsapp" class="nodeco" href="https://wa.me/5213313036681?text=Hola,%20quiero%20cotizar%20un%20servicio%20de%20musica.">  <div class="banner2">
  Armar otro paquete / cotizar
  </div></a>




<div class="contenedor"><div class="divisor"></div> </div> 
 
<div class="contenedor">
  <div class="divisor"></div></div> 

<div class="contenedor">  
  <div class="divisor"></div></div> 
  
 <div class="contenedor">
  <div class="divisor"></div></div>  










</div>
</div>





  <!--Bannertexto2-->
  <div class="bannertexto2">


<h3>Servicio por hora $700 pesos</h3>
<p>Cada paquete incluye 5 horas de servicio</p>

</div>



  <!--Bannertexto2-->
  <div class="bannertexto2">


<h3>Servicio de dj $1,200 pesos</h3>
<p>4 horas</p>

</div>



 <div class="divisor"></div> 
 <div class="divisor"></div> 
 <div class="divisor"></div> 
 <div class="divisor"></div> 

<div class="contenedor">
<img src="imagenes/g/g21.jpg" alt="W3Schools.com"  width="100%" style="float:right;"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
</div>


 <div class="divisor"></div> 
 <div class="divisor"></div> 
  <div class="divisor"></div> 
 <div class="divisor"></div> 






 <div class="divisor"></div> 
 <div class="divisor"></div> 
  <div class="divisor"></div> 
 <div class="divisor"></div> 



<div class="containergaleria">
  


 
 
 
 
 
 
  
  <!--Wrapper-->
  <div class="wrappergaleria">
   
    <!--Block1-->
    <div class="blockgaleria">
     <p class="titular">Paquete mediano
	 </p>
	  <img src="imagenes/g/g1.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
	  
    </div>

    <!--Block1-->
    <div class="blockgaleria">
    <p class="titular">Paquete básico
	</p>
 	<img src="imagenes/g/g2.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
  
    </div>
	
	    <!--Block1-->
    <div class="blockgaleria">
    <p class="titular">Decoración
	</p>
 	<img src="imagenes/g/g3.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
  
    </div>
	
	    <!--Block1-->
    <div class="blockgaleria">
    <p class="titular">Paquete mediano
	</p>
 	<img src="imagenes/g/g4.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
  
    </div>
	
	
	
	
	
  </div>




  <!--Wrapper2-->
  <div class="wrappergaleria">
   
    <!--Block1-->
    <div class="blockgaleria">
     <p class="titular">Módulo dj
	 </p>
	  <img src="imagenes/g/g5.jpg" alt="W3Schools.com" class="imagenesa" > <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
	  
    </div>

    <!--Block1-->
    <div class="blockgaleria">
    <p class="titular">Paquete mediano
	</p>
 	<img src="imagenes/g/g6.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
 
    </div>
	
	
	
	    <!--Block1-->
    <div class="blockgaleria">
     <p class="titular">Paquete big
	 </p>
	  <img src="imagenes/g/g7.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
	  
    </div>

    <!--Block1-->
    <div class="blockgaleria">
    <p class="titular">Paquete básico
	</p>
 	<img src="imagenes/g/g8.jpg" alt="W3Schools.com" class="imagenesa"> <!-- or style="width:100%;"--> <!-- imagen, not closing tag -->
 
    </div>
	
	

  </div>
  </div>










  <!--Footer-->
  <div class="footer"id="C5">
  <br>
Servicios de entretenimiento
<p>Servicio de música, dj, visuales, iluminación decorativa y arquitectónica.</p>

<br>

  </div>
  
  
  
  <!--Footer iconos-->
  <div class="footericonos">

	 <a class="icono1" title="Abrir en Facebook" href="https://www.facebook.com/Eventos-Urek-764966863843063/photos/?ref=page_internal" target="_blank"></a>
     <a class="icono2" title="Chat Whatsapp" href="https://wa.me/5213313036681?text=Hola,%20quiero%20apartar%20un%20servicio%20de%20musica" target="_blank"></a>
     <a class="icono3" title="Chat Messenger"href="https://m.me/urekdj_" target="_blank"></a></a>

 </div>




<script src="js.js"></script> 





</body>

</html>
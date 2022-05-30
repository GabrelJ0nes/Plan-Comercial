
<!DOCTYPE html>
<html>
	<head>
		<title>Plan Comercial</title>
		<link rel="stylesheet" type="text/css" href="correo.css">
		<link rel="icon" href=".ico">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
			<nav id="navegador">
				<center><h2 id="Plan-Comercial">Plan Comercial</h2></center>
			<div class="dx"></div>
				<ul>
					<li id="li1"><a href="index.html">Inicio</a></li>
					<li id="li3"><a href="#contacto">Contacto</a></li>
					<li id="li4"><a href="Formulario.html">Sugerencias</a></li>
				</ul>
			</nav><!-- / nav -->
		</header><!-- / #main-header -->
		<br>
		<br>
        <article id=article1>
            <section>


<br>
		<br>







		<form method="post" action="correo.php">
			<p>Cualquier duda o sugerencia que quiera realizarnos, por favor ingrese sus datos.</p>
			<label for="nombre">Nombre de usuario:</label>
			<br/>



			<input id="nombre" type="text" name="nombre" placeholder="Nombre">




			
			<br/>



			<label>Asunto:</label>
			<br/>




			<select name="asunto" id="asunto">
				<option value="Elegir">Por favor, elegir asunto</option>
				<option value="Sugerencia">Sugerencia</option>
				<option value="Problema">Problema</option>
			</select>




			<br/>	

			<label id="Mensaje" for="Mensaje">Mensaje:</label>
			<br>
			

			<textarea id="mensaje" type="text" name="mensaje" placeholder="Mensaje a escribir."></textarea>
			

			<br>


			<input id="Enviar" type="submit">


			<br>
			<div>
			    <center>
		        	<?php
                        $nombre = $_POST['nombre'];
                        $asunto = $_POST['asunto'];
                        $mensaje = $_POST['nombre']. $_POST['mensaje'];
                    	if(mail('mansilla.gonzalez.gabriel@gmail.com', $asunto, $mensaje)){
	                    	echo "¡Formulario enviado exitosamente!";
                         }else{
                              echo "Ha ocurrido un error al enviar el formulario. Intentelo de nuevo más tarde.";
                        }
                    ?>
                </center>
            </div>
		</form>
		<br>













		<br>
                

            </section>
        </article>
		<br>
		<div id="contacto">
			<footer>
				<p>Cualquier consulta mandar mensaje al +54 **** ******</p>
				<p>Seguinos en nuestras <b>redes</b>
					<a href="">Instagram</a>
				
					<a href="">Youtube</a>
				
					<a href="">Facebook</a>
			</footer>
		</div>
	</body>
</html>    
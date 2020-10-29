<html>
<head>

	<link rel="stylesheet" type="text/css" href="p1.css">
  	<title>Respuesta formulario</title>

</head>


<body>

	<div id="titulo"><h1>Respuesta del formulario</h1></div>

	<div class="cajaform"><center><h2>Datos ingresados en el formulario</h2></center><br>

	<span class="variablesform">Nombre: </span><?php echo $_REQUEST['nombre']; ?><br><br>

	<span class="variablesform">Apellidos: </span><?php echo $_REQUEST['apellidos']; ?><br><br>

	<span class="variablesform">Nombre de usuario:</span> <?php echo $_REQUEST['usuario']; ?><br><br> 

	<span class="variablesform">Contraseña:</span> <?php echo $_REQUEST['password']; ?><br><br>

	<span class="variablesform">Fecha de nacimiento:</span> <?php echo $_REQUEST['fecha']; ?><br><br>

	<span class="variablesform">Número de teléfono:</span> <?php echo $_REQUEST['telefono']; ?><br><br>


	<span class="variablesform">Imagen de perfil:</span> <?php if(!empty($_FILES['pic']['tmp_name'])){$imageData=file_get_contents($_FILES['pic']['tmp_name']);
echo "<img src='data:image/png;base64,", base64_encode($imageData), "'class='foto'/>";
}
else {echo "<span> No existe el archivo";}?><br><br>  


	<span class="variablesform">Género: </span><?php echo $_REQUEST['genero']; ?><br><br>

	<span class="variablesform">Director favorito:</span> <?php echo $_REQUEST['director']; ?><br><br>

	<span class="variablesform">Géneros cinematográficos favoritos: </span> <?php if(isset($_REQUEST['caja1'])){echo $_REQUEST['caja1'].".";}

	if(isset($_REQUEST['caja2'])){echo $_REQUEST['caja2'].",";}
	if(isset($_REQUEST['caja3'])){echo $_REQUEST['caja3'].",";} 
	if(isset($_REQUEST['caja4'])){echo $_REQUEST['caja4'].",";} 
	if(isset($_REQUEST['caja5'])){echo $_REQUEST['caja5'].",";}  	
	if(isset($_REQUEST['caja6'])){echo $_REQUEST['caja6'].",";} 
	if(isset($_REQUEST['caja7'])){echo $_REQUEST['caja7'].",";} 
	if(isset($_REQUEST['caja8'])){echo $_REQUEST['caja8'].",";} 
	if(isset($_REQUEST['caja9'])){echo $_REQUEST['caja9'].".";}
	?><br><br>
	<span class="variablesform">Comentarios o sugerencias: </span><?php echo $_REQUEST['coment']; ?><br><br>

	<span class="infoform">Método de envío de datos: </span><?php echo $_REQUEST['envio']; ?><br><br>

	<span class="infoform"> Tipo de codificación de los datos enviados:</span> <?php echo $_REQUEST['codif']; ?><br><br>

	<span class="infoform">URL de envío de datos: </span> <?php echo $_REQUEST['url']; ?><br><br>

</div>

<div class="varentorno"><center><h2>Variables de entorno<h2></center><br>

	<span class="vars">Archivo de script ejecutándose:</span> <?php echo $_SERVER['PHP_SELF']; ?><br><br>

	<span class="vars">Dirección IP del servidor: </span><?php echo $_SERVER['SERVER_ADDR']; ?><br><br>

	<span class="vars">Hora a la que se ha enviado el formulario:</span> <?php echo $_REQUEST['hora']; ?><br><br>

	<span class="vars">Versión del navegador empleado: </span><?php echo $_REQUEST['navegador']; ?><br><br>

	<span class="vars">Nombre del Host del servidor:</span> <?php echo $_SERVER['SERVER_NAME']; ?><br><br>

	<span class="vars">Protocolo empleado en la solicitud de la página:</span> <?php echo $_SERVER['SERVER_PROTOCOL']; ?><br><br>

	<span class="vars">Cadena de consulta de la petición: </span><?php echo $_SERVER['QUERY_STRING']; ?><br><br>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba Tejido Digital</title>
	<link rel="stylesheet" href="Assets/css/Styles.css">
	<script
  		src="https://code.jquery.com/jquery-3.3.1.js"
  		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  		crossorigin="anonymous">
  	</script>
 	<link rel="icon" href="Assets/Img/icon.png">

</head>
<body>
<div class="grid"> 
  <div class="item1"></div> 
  <div class="item2">
  	<div>
  		<form id="FormInformation">
  			<input type="text" name="Name" placeholder="Ingrese su nombre" required><br/>
  			<input type="number" name="Age" placeholder="Digite su edad" required  min="1"><br/>
  			<button id="enviar" type="button" value="Enviar" onclick="loadDoc()">ENVIAR</button>
  		</form>
  		<div id="Answer" class="Answer"><!-- Respuesta AJAX --></div>
  	</div>
  </div>
  <div class="item3"></div>
  <div class="item4"></div>
  <div class="item5">
  	<p>Usuarios</p>
  	<h1 id="count"><?php include("BD/Count.php"); ?></h1>
  </div>
  <div class="item6"></div>
  <div class="item7"></div>

</div>
<script src="Assets/js/Send.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Investigador</title>
</head>
<body>

<h1>Investigador</h1>
<br>
<br>
<h2>Ingresar Investigador</h2>
<br>
<form  action="<?php echo base_url(); ?>index.php/Investigador_Controller/insertar" method="post" name="form">

<label>Programa: <input type="text" name="programa"></label>
<br>
<br>
<label>Facultad: <input type="text" name="facultad"></label>
<br>
<br>
<label>Grupo de Investigaci�n: <input type="text" name="grupo_investigacion"></label>
<br>
<br>
<label>Tipo de Vinculaci�n: <input type="text" name="tipo_vinculacion"></label>
<br>
<br>
<label>Nombre: <input type="text" name="nombre"></label>
<br>
<br>
<label>Documento: <input type="text" name="documento"></label>
<br>
<br>

<label>Numero Celular: <input type="text" name="celular"></label>
<br>
<br>
<label>Correo Electronico: <input type="text" name="correo"></label>
<br>
<br>
<input type="submit" name="Guardar" value="Guardar">

</form>

</body>
</html>
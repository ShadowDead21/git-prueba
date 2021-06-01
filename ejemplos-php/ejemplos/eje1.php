<html><head><title>Sorting an Array</title></head>
<body bgcolor="CCFFFF">
<font size="+1">
<pre>
<b>
Agregando de Datos
<br />
<?php
  extract($_REQUEST);
  $persona = array(
  'nombre'=> $nombre,
  'apellido'=> $apellido,
  'telefono'=> $telefono,
  );
foreach($persona as $posicion=>$jugador)
	{
	echo "  " . $posicion . " es " . $jugador;
	echo "<br>";
	}
?>
</pre>
</b>
</body>
</html>


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
 echo $persona['nombre']; 
 echo '/';
 echo $persona['apellido'];
 echo '/';
 echo $persona['telefono'];
?>
</pre>
</b>
</body>
</html>


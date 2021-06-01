<html><head><title>Sorting an Array</title></head>
<body bgcolor="CCFFFF">
<font size="+1">
<pre>
<b>
Agregando de Datos
<br />
<?php
  extract($_REQUEST);
  $animals = array("dogs", "cats", "horses", "monkey", "gorilla", "zebras");
  $animals[]= $dato;
  asort($animals);
  print_r($animals);

?>
</pre>
</b>
</body>
</html>

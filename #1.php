<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 1</title>
  </head>
  <body>
    <h2>DATOS</h2>
    <?php



  $registro = array("Pedro Torres","Calle_20","3003785347");

  list($nombre, $direccion, $numero) = $registro;
  echo "Nombre: $nombre.<br><br>";
    echo "Direccion: $direccion.<br><br>";
      echo "Numero Telefonico: $numero.<br><br>";
  ?>


  </body>
</html>

<?php
$mysqli= new mysqli('localhost', 'root', '', 'quiz');

if ($mysqli->connect_error){
  die('no conectado'. $mysqli->connect_error);
}

$sql="UPDATE cuantas SET cuantas=1";
$insertar= $mysqli->query($sql);

$sql="SELECT * FROM jugadores WHERE codjug=1";
$consulta= $mysqli->query($sql);
$fila=$consulta->fetch_assoc();

$jug1=$fila['nombre'];
$pun1=$fila['puntaje'];

$sql="SELECT * FROM jugadores WHERE codjug=2";
$consulta= $mysqli->query($sql);
$fila=$consulta->fetch_assoc();

$jug2=$fila['nombre'];
$pun2=$fila['puntaje'];

if($pun1>$pun2){
  $mensaje="Gana!!";
  $jugador=$jug1;
}elseif ($pun2>$pun1) {
  $mensaje="Gana!!";
  $jugador=$jug2;
}else {
  $mensaje="Empate!!";
  $jugador="";
}


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title>¡Final!</title>
  </head>
  <body class="dos">
    <h1 class="fin"><?php echo $jugador; ?></h1>
    <h1 class="fin"><?php echo $mensaje; ?></h1>
    <footer>
      <a href="ingresar.php"><button type="button" class="respondido">VOLVER a JUGAR</button></a>
    </footer>
  </body>
</html>

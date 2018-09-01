<?php
$jugador1= $_POST['jugador1'];
$jugador2= $_POST['jugador2'];

$mysqli= new mysqli('localhost', 'root', '', 'quiz');

if ($mysqli->connect_error){
  die('no conectado'. $mysqli->connect_error);
}

$sql="UPDATE jugadores SET nombre='$jugador1', puntaje=0 WHERE codjug=1";
$insertar= $mysqli->query($sql);

$sql="UPDATE jugadores SET nombre='$jugador2', puntaje=0 WHERE codjug=2";
$insertar= $mysqli->query($sql);

header('Location: elegir.php');

 ?>

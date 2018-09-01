<?php

$opcion1=$_POST['boton'];
$jugador=$_POST['juga'];

$mysqli= new mysqli('localhost', 'root', '', 'quiz');

if ($mysqli->connect_error){
  die('no conectado'. $mysqli->connect_error);
}

$sql="SELECT * from cuantas";
$consulta= $mysqli->query($sql);
$fila=$consulta->fetch_assoc();
$cuantasVan=$fila['cuantas']+1;
$sql="UPDATE cuantas SET cuantas='$cuantasVan'";
$insertar= $mysqli->query($sql);


if ($jugador==1) {
  $sql="SELECT * FROM jugadores WHERE codjug=1";
  $consulta= $mysqli->query($sql);
  $fila=$consulta->fetch_assoc();
  $puntos=$fila['puntaje'];
}else{
  $sql="SELECT * FROM jugadores WHERE codjug=2";
  $consulta= $mysqli->query($sql);
  $fila=$consulta->fetch_assoc();
  $puntos=$fila['puntaje'];
}
if($opcion1==1){
  $gana=$puntos+10;
  if($jugador==1){
    $sql="UPDATE jugadores SET puntaje='$gana' WHERE codjug=1";
    $insertar= $mysqli->query($sql);
  }else{
    $sql="UPDATE jugadores SET puntaje='$gana' WHERE codjug=2";
    $insertar= $mysqli->query($sql);
  }
  header('Location: verdadero.php');
}else{
  $gana=$puntos-5;
  if($jugador==1){
    $sql="UPDATE jugadores SET puntaje='$gana' WHERE codjug=1";
    $insertar= $mysqli->query($sql);
  }else{
    $sql="UPDATE jugadores SET puntaje='$gana' WHERE codjug=2";
    $insertar= $mysqli->query($sql);
  }
  header('Location: falso.php');
}


 ?>

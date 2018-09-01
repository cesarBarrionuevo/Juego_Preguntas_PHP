<?php

$mysqli= new mysqli('localhost', 'root', '', 'quiz');

if ($mysqli->connect_error){
  die('no conectado'. $mysqli->connect_error);
}

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

$sql="SELECT * FROM cuantas";
$consulta= $mysqli->query($sql);
$fila=$consulta->fetch_assoc();
$cuantasVan=$fila['cuantas'];

if ($cuantasVan>10){

  header('Location: Final.php');
}

//Aca seleccionamos la base de preguntas para la categoria seleccionada

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estiloeleg.css">
    <title></title>
  </head>
  <body class="tres">
    <div class="pi2">
      <h2 class="pi">Pregunta N°: </h2>
      <h2 class="resp"><?php echo $cuantasVan; ?></h2>
    </div>
    <div class="conjunto">
      <div class="img1">
        <a href="preguntas.php?id=1"><img class="imagenes" src="mundial.png" alt=""></a>
      </div>
      <div class="img2">
        <a href="preguntas.php?id=5"><img class="imagenes" src="entretenimiento.png"></a>
      </div>
      <div class="img3">
        <a href="preguntas.php?id=3"><img class="imagen" src="geografia.png"></a>
      </div>
      <div class="img4">
        <a href="preguntas.php?id=2"><img class="imagen" src="historia.png"></a>
      </div>
      <div class="img5">
        <a href="preguntas.php?id=4"><img class="imagen" src="matematica.png"></a>
      </div>
      <div class="img6">
        <a href="preguntas.php?id=6"><img class="imagen" src="naturales.png"></a>
      </div>
    </div>
    <div class="jug1">
      <h2 class="titJug">Jugador 1: </h2>
      <h3 class="jugTit"><?php echo $jug1; ?></h3>
      <h2 class="titJug">Puntaje: </h2>
      <h4 class="jugTit"><?php echo $pun1; ?></h4>
    </div>
    <div class="jug2">
      <h2 class="titJug">Jugador 2: </h2>
      <h4 class="jugTit"><?php echo $jug2; ?></h4>
      <h2 class="titJug">Puntaje: </h2>
      <h3 class="jugTit"><?php echo $pun2; ?></h3>
    </div>
  </body>
</html>

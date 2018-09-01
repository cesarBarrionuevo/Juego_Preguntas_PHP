<?php

$codigo=$_GET['id'];


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

//Aca seleccionamos la base de preguntas para la categoria seleccionada

  if($codigo==1){
    $al_azar=rand(61, 90);
  }elseif ($codigo==2) {
    $al_azar=rand(1, 30);
  }elseif ($codigo==3) {
    $al_azar=rand(61, 90);
  }elseif ($codigo==4) {
    $al_azar=rand(121, 150);
  }elseif ($codigo==5) {
    $al_azar=rand(31, 60);
  }elseif($codigo==6){
    $al_azar=rand(91, 120);
  }

$sql="SELECT * FROM preguntas WHERE codcat='$codigo' and codpre='$al_azar'";
$consulta=$mysqli->query($sql);
$fila=$consulta->fetch_assoc();

$pregunta=$fila['pregunta'];
$codpre=$fila['codpre'];

//En esta seccion establecemos las respuestas
$sql="SELECT * FROM respuestas WHERE codpre=$codpre";
$consulta=$mysqli->query($sql);
$fila=$consulta->fetch_assoc();


$respuesta1=$fila['respuesta'];
$codrep=$fila['codrep'];
$correcto1=$fila['correcto'];

$sql="SELECT * FROM respuestas WHERE codrep=$codrep+1";
$consulta=$mysqli->query($sql);
$fila=$consulta->fetch_assoc();

$respuesta2=$fila['respuesta'];
$correcto2=$fila['correcto'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="historia.css">
    <title></title>
  </head>
  <body class="cuatro">
    <div class="pregunta">
        <h2>Pregunta: </h2>
        <div class="pr">
          <p style="align: center;"> <?php echo utf8_encode($pregunta) ?></p>
        </div>
          <div class="losDos">
              <form class="" action="responder.php" method="post">
                  <button type="submit" name="button" class="respuesta">Responde <?php echo $jug1; ?></button>
                  <input type="hidden" name="juga" value="1">
                  <input type="hidden" name="resp" value="<?php echo $codpre ?>">

              </form>
          </div>
          <div class="losDos">
              <form class="" action="responder.php" method="post">
                  <button type="submit" name="button" class="respuesta">Responde <?php echo $jug2; ?></button>
                  <input type="hidden" name="juga" value="2">
                  <input type="hidden" name="resp" value="<?php echo $codpre ?>">

              </form>
        </div>

    </div>


    <div class="jug1">
      <h2 class="titJug">Jugador:</h2>
      <h3 class="jugTit"><?php echo $jug1; ?></h3>
      <h2 class="titJug">Puntaje:</h2>
      <h4 class="jugTit"><?php echo $pun1; ?></h4>

    </div>

    <div class="jug2">
      <h2 class="titJug">Jugador:</h2>
      <h3 class="jugTit"><?php echo $jug2; ?></h3>
      <h2 class="titJug">Puntaje:</h2>
      <h4 class="jugTit"><?php echo $pun2; ?></h4>

    </div>
  </body>
</html>

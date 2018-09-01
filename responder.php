<?php
$jugadorRespondio=$_POST['juga'];
$codpreg=$_POST['resp'];
echo $jugadorRespondio;
echo $codpreg;

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


$sql="SELECT * FROM preguntas WHERE codpre='$codpreg'";
$consulta=$mysqli->query($sql);
$fila=$consulta->fetch_assoc();

$pregunta=$fila['pregunta'];
$codpre=$fila['codpre'];

//En esta seccion establecemos las respuestas
$sql="SELECT * FROM respuestas WHERE codpre=$codpreg";
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


$guardado=$pregunta
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
          <p><?php echo utf8_encode($pregunta); ?></p>
        </div>

        <?php echo utf8_encode ($correcto1); ?>
        <form class="" action="verifico.php" method="post">
          <input type="hidden" name="juga" value="<?php echo $jugadorRespondio;   ?>">
          <button type="submit" class="respuesta" name="boton" value="<?php echo utf8_encode ($correcto1); ?>"><?php echo utf8_encode ($respuesta1); ?></button>
          <button type="submit" class="respuesta" name="boton" value="<?php echo utf8_encode ($correcto2); ?>"><?php echo utf8_encode ($respuesta2); ?></button>
        </form>

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

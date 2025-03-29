<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 30</title>
</head>
<body>
<center>
        <header>
            <h1><mark>Ingresar 4 Notas y Obtener Promedio de las 3 Mejores</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="nota1">NUMERO 1:</label>
    <input type="number" id="nota1" name="nota1"><br><br>
    <label for ="nota2">NUMERO 2:</label>
    <input type="number" id="nota2" name="nota2"><br><br>
    <label for ="nota3">NUMERO 3:</label>
    <input type="number" id="nota3" name="nota3"><br><br>
    <label for ="nota4">NUMERO 4:</label>
    <input type="number" id="nota4" name="nota4"><br><br>
    <button type="NUM"> Enviar </button><br>
</form>
<?php
 if($_SERVER["REQUEST_METHOD"]=='POST'){
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $nota4=$_POST['nota4'];

    $notas= array($nota1, $nota2, $nota3, $nota4);
    rsort($notas);
    $promedio=($notas[0]+$notas[1]+$notas[2])/3;
    echo"<p>El Promedio de las 3 Mejores Notas es:<br>" . number_format($promedio, 2) . "</p>";
    if($promedio >= 6){
        echo"<p>Aprobado</p>";
    }else{
        echo"<p>Reprobado</p>";
    }
 }
?>
<br>
<a href="Practica21.php"> Siguiente Practica</a>
  </main>
</section> 
<footer>
    <p>Milton Emiliano Lopez Moreira</p>
</footer> 
</body>
</center>
</html>
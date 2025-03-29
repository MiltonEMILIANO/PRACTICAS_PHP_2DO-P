<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 26</title>
</head>
<body>
    <center>
    <header>
        <h1><mark>Devolver en Orden Ascendente</mark></h1>
</header>
    <main>
        <section>
            <form action="" method="POST">
            <label for ="numero1">NUMERO 1:</label>
    <input type="number" id="numero1" name="numero1"><br><br>
    <label for ="numero2">NUMERO 2:</label>
    <input type="number" id="numero2" name="numero2"><br><br>
    <label for ="numero3">NUMERO 3:</label>
    <input type="number" id="numero3" name="numero3"><br><br>
    <button type="NUM"> Enviar </button><br>
</form>
            <?php
            if($_SERVER["REQUEST_METHOD"]=='POST'){
                $numero1=$_POST['numero1'];
                $numero2=$_POST['numero2'];
                $numero3=$_POST['numero3'];
              if($numero1<$numero2 && $numero1<$numero3){
                $menor=$numero1;
              }else if($numero2<$numero1 && $numero2<$numero3){
$menor=$numero2;
              }else{
$menor=$numero3;
              }
              if($numero1>$numero2 && $numero1>$numero3){
                $mayor=$numero1;
            }else if($numero2>$numero1 && $numero2>$numero3){
$mayor=$numero2;
}else{
    $mayor=$numero3;
            }       
            $intermedio=($numero1+$numero2+$numero3)-($mayor+$menor); 
            echo"<br>Numero Mayor es:<br> $mayor <br>";
            echo"Numero Menor es:<br> $menor <br>";
            echo"Resultado Intermedio:<br> $intermedio <br>"; 
            }

            ?>
<br>  
<a href="Practica27.php"> Siguiente Practica</a>
</main>
</section>
<footer>
    <p>Milton Emiliano Lopez Moreira</p>
</footer>
</body>
        </center>
</html>
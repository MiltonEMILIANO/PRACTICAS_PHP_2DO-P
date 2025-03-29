<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 28</title>
</head>
<body>
    <center>
        <header>
            <h1><mark>Mayor de Edad o Menor de Edad</mark></h1>
</header>
<main>
    <section>
        <form action="" method="POST">
        <label for ="numero">Ingresa el Numero:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> Enviar </button><br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero=$_POST['numero'];
    if($numero >= 18){
        $mensaje="<br>Su Edad es:<br>" . $numero . "<br>Es Mayor de Edad";
   
    }else if($numero < 18 ){
        $mensaje="<br>Su Edad es:<br>" . $numero . "<br>Es Menor de Edad";
    }else{
        $mensaje="<br>$numero Ingresa Numero Valido<br>";
    }
echo $mensaje;
}
?>
<br>
<a href="Practica29.php"> Siguiente Practica</a>
  </main>
</section> 
<footer>
    <p>Milton Emiliano Lopez Moreira</p>
</footer> 
</body>
</center>
</html>

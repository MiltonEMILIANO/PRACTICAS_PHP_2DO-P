<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 24</title>
</head>
<body>
<center>
        <header>
    <h1><mark> Es Par o Impar</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="numero">Ingresa el Numero:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type="submit"> Enviar </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $numero= $_POST['numero'];
    if($numero % 2 == 0){
        $mensaje="<br>El numero<br>" . $numero. "<br>Es Par";
    }else{
        $mensaje="<br>El numero<br>" . $numero. "<br>Es Impar";
    }
    echo"<br>$mensaje<br>";
}
?>
<br>  
<a href="Practica25.php"> Siguiente Practica</a>
</main>
</section>
<footer>
<p>Milton Emiliano Lopez Moreira</p>
</footer>
</center>
</body>
</html>
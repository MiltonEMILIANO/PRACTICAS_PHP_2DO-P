<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8”>
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
    <title>Practica 23</title>
</head>
<body>
<center>
        <header>
    <h1><mark> Multiplo de 3 y 5</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="numero">Ingresa el Numero:</label>
    <input type="number" id="numero" name="numero"><br><br>
    <button type=”submit”> Enviar </button>
</form>
<?php
If($_SERVER["REQUEST_METHOD"]=='POST'){
    $numer= $_POST['numero'];

    If($numer % 3 == 0 && $numer % 5 == 0){
        $mensaje="<br>EL NUMERO<br>" . $numer . "<br>Es multiplo de 3 y 5";
    }else{
        $mensaje="<br>El Numero<br>" . $numer . "<br>No es multiplo  de 3 y 5";
    }
Echo $mensaje;
    }
?>
 <br>  
 <a href="Practica24.php"> Siguiente Practica</a>
</main>
</section>
<footer>
<p>Milton Emiliano Lopez Moreira</p>
</footer>
</center>
</body>
</html>


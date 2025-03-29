<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 25</title>
</head>
<body>
<center>
        <header>
    <h1><mark> Doble y Triple</mark></h1>
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
$numero=$_POST['numero'];
if($numero % 2 == 0){
    $mensaje="<br>El Doble del Numero<br>" . $numero."<br>Es:<br>" . ($numero * 2);

}else{
    $mensaje="<br>El Triple del Numero<br>" . $numero."<br>Es:<br>" . ($numero * 3);
}
echo "<br>$mensaje<br>";
}
?>
<br>  
<a href="Practica26.php"> Siguiente Practica</a>
</main>
</section>
<footer>
    <p>Milton Emiliano Lopez Moreira</p>
</footer>
</body>
</center>
</html>

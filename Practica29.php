<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 29</title>
</head>
<body>
<center>
        <header>
            <h1><mark>Devolver el Doble si es Positivo, Triple si es Negativo</mark></h1>
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
    if($numero > 0){
        $mensaje="<br>El Doble del Numero<br>" . $numero."<br>es:<br>" . ($numero * 2);
    }else if($numero < 0 ){
    $mensaje="<br>El Triple del Numero<br>" . $numero."<br>es:<br>" . ($numero * 3);
    }else{
        $mensaje="<br>Numero Neutro<br>" . $numero."<br>es:<br>" . ($numero);
    }
    echo "<br>$mensaje<br>";
}
?>
<br>
<a href="Practica30.php"> Siguiente Practica</a>
  </main>
</section> 
<footer>
    <p>Milton Emiliano Lopez Moreira</p>
</footer> 
</body>
</center>
</html>
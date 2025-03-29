<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 22</title>
</head>
<body>
    <center>
        <header>
    <h1><mark>Determinar si es Vocal</mark></h1>
</header>
<main>
    <section>
    <form action="" method="POST">
    <label for ="letra">Letra:</label>
    <input type="text" id="letra" name="letra" maxlength=""><br><br>
    <button type="submit"> Enviar </button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
   $char= $_POST['letra'];
if($char == 'a'|| $char == 'A'){
    $resultado='Es vocal';
}else if($char == 'e'|| $char == 'E'){
        $resultado='Es vocal';
}else if($char == 'i'|| $char == 'I'){
    $resultado='Es vocal';
 } else if($char == 'o'|| $char == 'O'){
        $resultado='Es vocal';
 }else if($char == 'u'|| $char == 'U'){
            $resultado='Es vocal';
 }else{
    $resultado ='No es vocal';
 }echo"<br>La Letra Ingresada $resultado <br>"; 
 } ?>
 <br>  
<a href="Practica23.php"> Siguiente Practica</a>

</section>
</main>
<footer>
    <p>Milton Emiliano Lopez Moreira</p>
</footer>
</center>
</body>
</html>

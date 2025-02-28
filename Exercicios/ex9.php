<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
<fieldset>
        <legend>Exercício 09</legend>
    <form action="ex9.php" method="get">
     
    <label for="num1">Digite o primeiro valor:</label>
    <input type="text" name="num1" id="num1">

    <br>
    <label for="num2">Digite o segundo valor:</label>
    <input type="text" name="num2" id="num2">
    <br>
    <label for="num3">Digite o terceiro valor:</label>
    <input type="text" name="num3" id="num3">
    <br>
    <input type="submit" value="Enviar">

    </form>
    </fieldset>

    <?php

    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    $numero3 = $_GET['num3'];

    if($numero1>$numero2 && $numero1>$numero3){
        echo 'O primeiro é maior';
    }
    else if($numero2>$numero1 && $numero2>$numero3){
        echo 'O segundo é maior';
    }
    else{
        echo 'O terceiro é maior';
    }
    }


     ?>
</body>
</html>
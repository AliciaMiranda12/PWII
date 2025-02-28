<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 11</legend>
        <form action="ex11.php" method="get">

         
    <label for="num1">Digite o primeiro lado:</label>
    <input type="text" name="num1" id="num1">

    <br>
    <label for="num2">Digite o segundo lado:</label>
    <input type="text" name="num2" id="num2">
    <br>
    <label for="num3">Digite o terceiro lado:</label>
    <input type="text" name="num3" id="num3">
    <br>
    <input type="submit" value="Enviar">

        </form>
    </fieldset>
    
    <?php
      if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
     $ladoA = $_GET['num1'];
     $ladoB = $_GET['num2'];
     $ladoC = $_GET['num3'];
     if($ladoA==$ladoB && $ladoB==$ladoC){
        echo 'O triângulo é equilátero';
     }
     else if($ladoA==$ladoB || $ladoA==$ladoC || $ladoB==$ladoC){
        echo 'O triângulo é isósceles';
    }
    else if( $ladoA<>$ladoB || $ladoB<>$ladoC){
        echo 'É escaleno';
    }
    else{
        echo 'Não é triângulo';

    }}
    ?>

    
</body>
</html>
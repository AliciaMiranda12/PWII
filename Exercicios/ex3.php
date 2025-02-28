<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 03</legend>
    <form action="ex3.php" method="get">

        <label for="numero">Digite um número inteiro:</label>
        <input type="text" name="numero" id="numero">
        <br>
        <input type="submit" value="Enviar">

    </form>
    </fieldset>
    <?php
    if(isset($_GET['numero'])){
       $numero = $_GET['numero'];
       if($numero<100){
        echo 'O número é menor que 100';
       }
       else{
        echo 'O número é maior que 100';
       }
    }
    ?>
</body>
</html>
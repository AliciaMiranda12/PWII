<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 06</legend>
        <form action="ex6.php" method="get">

        <label for="num1">Primeiro valor:</label>
        <input type="text" name="num1" id="num1"> 
        <br>

        <label for="num2">Segundo  valor:</label>
        <input type="text" name="num2" id="num2">
        <br> 
        <input type="submit" value="Enviar">

        </form>
    </fieldset>
    <?php
    if(isset($_GET['num1']) && isset($_GET['num2'])){
        $numero1 = $_GET['num1'];
        $numero2 = $_GET['num2'];

        if($numero1>$numero2){
            echo 'O valor um é maior';
        }else{
            echo 'O valor dois é maior';
        }
    }
    ?>
</body>
</html>
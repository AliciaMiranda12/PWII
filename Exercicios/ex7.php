<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 07</legend>
    <form action="ex7.php" method="get">
        <label for="data">Insira o ano do seu nascimento:</label>
        <input type="text" name="data" id="data">
        <br>
        <input type="submit" value="Enviar">
    </form>

    </fieldset>
    <?php
    if(isset ($_GET['data'])){
     $data = $_GET['data'];
     $ano = 2024 - $data;
     if($ano >=18){
        echo 'É maior de idade';
     }
     else{
        echo 'É menor de idade';
     }
    }
    ?>
</body>
</html>
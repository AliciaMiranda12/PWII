<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 05</legend>
    <form action="ex5.php" method="get">
        <label for="letra">Digite uma letra:</label>
        <input type="text" name="letra" id="letra" required>
        <br>
        <input type="submit" value="Enviar">

    </form>
    </fieldset>
    <?php
    if(isset ($_GET['letra'])){
    $letra = $_GET['letra'];
    if($letra=='a' ||$letra=='e'|| $letra=='i'|| $letra=='o' ||$letra=='u'){
        echo 'É vogal';
    }else{
        echo 'É consoante';
    } 
    }
    ?>
</body>
</html>
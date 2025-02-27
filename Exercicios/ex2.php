<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 02</legend>
    <form action="ex2.php" method="get">
        <label for="idade">Digite sua idade:</label>
        <input type="idade" name="idade">

    </form>
    </fieldset>
    <?php
     if (isset($_GET['idade'])){
        $idade = $_GET['idade'];
      if ($idade<18){
       echo 'Não pode votar';
     } else {
       echo 'Pode votar';
     }
     }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex01</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 01</legend>
    <form action="ex1.php" method="get">
        <label for="numero">Digite um número de 0 a 10:</label>
        <input type="text" id="numero" name="numero" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    </fieldset>
    <?php
            if (isset($_GET['numero'])) {
                $numero = $_GET['numero'];
                if ($numero < 6) {
                    echo 'Reprovado';
                }else if ($numero>=6 && $numero<7){
                    echo 'Recuperação';

                } else if($numero>10) {
                    echo 'Inválido';
                } else{
                    echo 'Aprovado';
                }
            }
      
    ?>
</body>
</html>
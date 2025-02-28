<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 04</legend>
    <form action="ex4.php" method="get">

        <label for="mes">Digite um mês:</label>
        <input type="text" name="mes" id="mes">
        <br>
        <input type="submit" value="Enviar">

    </form>
    </fieldset>
    <?php
    $mesum = ['janeiro','fevereiro','março','abriel','maio','junho'];
    $mesdois =['julho','agosto','setembro','outubro','novembro','dezemnbro'];
    
    if (isset($_GET['mes'])) {
        $mes = $_GET['mes']; 

        if (in_array($mes, $mesum)) {
            echo "O mês é do primeiro semestre";
        } else if (in_array($mes, $mesdois)) {
            echo "O mês é do segundo semestre";
        } else {
            echo "Mês inválido.";
        }
    }
    ?>
</body>
</html>
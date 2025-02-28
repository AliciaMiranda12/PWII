<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 10</legend>
    <form action="ex10.php" method="get">

        <label for="usuario">Nome de Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" name="cadastrar" value="Enviar">
    </form>
    </fieldset>

    <?php
     if (isset($_GET['usuario']) && isset($_GET['senha'])) {
        $usuario = $_GET['usuario'];
        $senha = $_GET['senha'];

        if ($usuario ==='Admin' && $senha === '123') {
            echo 'Cadastrado com sucesso';
         }  
         else {
                echo 'Acesso negado!Usuário ou senha incorretos!';
            }
        
    }

    ?>
</body>
</html>
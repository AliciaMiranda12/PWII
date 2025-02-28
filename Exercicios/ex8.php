<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 08</legend>
        <form action="ex8.php" method="get">

        <label for="nome">Nome do vendedor:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="vendas">Valor das vendas:</label>
        <input type="text" name="vendas" id="vendas">
        <br>
        <input type="submit" value="Enviar">


        </form>
    </fieldset>
    <?php
    if(isset($_GET['vendas'])){
     $vendas = $_GET['vendas'];
     $bonus = 0;

     if($vendas<1000){
        $bonus = $vendas ;
        echo $vendas;
     }
     else if($vendas>=1000 && $vendas<2000){
        $bonus = $vendas * 0.30;
        echo $vendas + $bonus;
     }
     else if($vendas>=2000 && $vendas<5000){
        $bonus = $vendas * 0.20;
        echo $vendas + $bonus;
    }
    else if($vendas>=5000){
        $bonus = $vendas * 0.10;
        echo $vendas + $bonus;
    }
 }
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <fieldset>
        <legend>Exercício 13</legend>
        <form action="ex13.php" method="get">
            
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="portugues">Nota de portugues:</label>
        <input type="text" name="portugues" id="portugues">
        <br>
        <label for="matematica">Nota de matemática:</label>
        <input type="text" name="matematica" id="matematica">
        <br>
        <label for="ingles">Nota de ingles:</label>
        <input type="text" name="ingles" id="ingles">
        <br>
        <label for="informatica">Nota de informatica:</label>
        <input type="text" name="informatica" id="informatica">
        <br>
        <label for="frequencia">Frequencia do aluno:</label>
        <input type="text" name="frequencia" id="frequencia">
        <br>

        <input type="submit" value="Enviar">

        </form>
    </fieldset>
    <?php
        if(isset($_GET['portugues']) && isset($_GET['matematica']) && isset($_GET['ingles']) && isset($_GET['informatica']) && isset($_GET['frequencia'])){
     $port = $_GET['portugues'];
     $mat = $_GET['matematica'];
     $ingles = $_GET['ingles'];
     $info = $_GET['informatica'];
     $frequencia = $_GET['frequencia'];

     $media = ($port + $mat + $ingles + $info) / 4;

     if($media>7 && $frequencia>75){
        echo 'Aprovado';
     }
     else if($media<7 || $frequencia<75){
        echo 'Reprovado';
     }
     else{
        echo 'Inválido';
     }
   }
     

    
    ?>

    
    
</body>
</html>
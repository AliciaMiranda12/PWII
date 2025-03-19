<?php
$pessoa = ['nome' =>'Amaurizin',
'sobrenome' => 'Verdiinho Marciano',
'idade' => 60];

$funcionarios = [
 'pessoa1' => [
    'nome' => 'Hipaminondas',
    'sobrenome' => 'Silva',
    'idade' => 20
 ],
 'pessoa2' => [
    'nome' => 'Seleide',
    'sobrenome' => 'Silva',
    'idade' => 28
 ],
 'pessoa3' => [
    $pessoa

 ]
];
echo'<pre>';
echo var_dump($funcionarios);
echo $funcinarios ['pessoa1'] ['nome'];
?>
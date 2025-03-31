<?php
$alunos = [
    [
        'nome' => 'Marquitos',
        'nota' => 5
    ],
    
    [
        'nome' => 'Jucilielson',
        'nota' => 10
    ]


];

foreach ($alunos as $key => $value) {
    if ($value['nota'] <7)
    echo 'Aluno' . $value['nome'] . 'reprovado!';
    else
    echo 'Aluno' .  $value ['nome'] . 'aprovado';
}


?>
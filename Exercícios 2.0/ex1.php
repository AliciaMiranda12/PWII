
<?php

$alunos = [
    [
        'nome' => 'Stitch',
        'RM' => '123456',
        'foto' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d2/Stitch_%28Lilo_%26_Stitch%29.svg/640px-Stitch_%28Lilo_%26_Stitch%29.svg.png',
        'telefone' => '15 9999-9999'
    ],
    [
        'nome' => 'Lilo',
        'RM' => '654321',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuN216E2p8SKp2P0Y6h7rGoqxVFVW0FtkBUw&s',
        'telefone' => '15 9888-8888'
    ],
    [
        'nome' => 'Nani',
        'RM' => '789012',
        'foto' => 'https://upload.wikimedia.org/wikipedia/en/thumb/d/d2/Stitch_%28Lilo_%26_Stitch%29.svg/640px-Stitch_%28Lilo_%26_Stitch%29.svg.png',
        'telefone' => '15 9777-7777'
    ],
    [
        'nome' => 'David',
        'RM' => '345678',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuN216E2p8SKp2P0Y6h7rGoqxVFVW0FtkBUw&s',
        'telefone' => '15 9666-6666'
    ]
];

foreach ($alunos as $aluno) {
    echo 'Nome: ' . $aluno['nome'] . '<br>';
    echo 'RM: ' . $aluno['RM'] . '<br>';
    echo '<img src="' . $aluno['foto'] . '" alt="Foto de ' . $aluno['nome'] . '" style="width:200px;"><br>';
    echo 'Telefone: ' . $aluno['telefone'] . '<br><br>';
}

?>


<?php
$zoologico = [
    [
        'nome do animal' => 'Amora',
        'raça' => 'shih-tzu',
        'espécie' => 'cachorro',
        'cor' => 'branca e marrom',
        'idade' => '2 anos',
        'foto' => 'https://i.pinimg.com/736x/23/e9/12/23e912479193ac777ad23e6efd56e425.jpg',
        'peso' => '6 kg'
    ],
    [
        'nome do animal' => 'Max',
        'raça' => 'sem raça definida',
        'espécie' => 'cachorro',
        'cor' => 'preto',
        'idade' => '4 anos',
        'foto' => 'https://guiapetfriendly.com.br/wp-content/uploads/2024/03/vira-lata-.png',
        'peso' => '9 kg'
    ],
    [
        'nome do animal' => 'Mary',
        'raça' => 'maine coon',
        'espécie' => 'gato',
        'cor' => 'branca',
        'idade' => '1 ano',
        'foto' => 'https://i.pinimg.com/736x/ec/b1/d8/ecb1d847c5d1f20b7998841850936f38.jpg',
        'peso' => '5 kg'
    ],
    [
        'nome do animal' => 'Luna',
        'raça' => 'friesian',
        'espécie' => 'cavalo',
        'cor' => 'marrom',
        'idade' => '9 anos',
        'foto' => 'https://i.pinimg.com/736x/e3/9f/3d/e39f3ddd758c8ce057421ad350e3b657.jpg',
        'peso' => '650 kg'
    ],
];
foreach ($zoologico as $zoologico) {
    echo 'Nome do animal: ' . $zoologico['nome do animal'] . '<br>';
    echo '<img src="' . $zoologico['foto'] . '" alt="Foto de ' . $zoologico['foto'] . '" style="width:200px;"><br>';
    echo 'Raça: ' . $zoologico['raça'] . '<br>';
    echo 'Espécie: ' . $zoologico['espécie'] . '<br>';
    echo 'Cor: ' . $zoologico['cor'] . '<br>';
    echo 'Idade: ' . $zoologico['idade'] . '<br>';
    echo 'Peso: ' . $zoologico['peso'] . '<br><br>';

}


?>
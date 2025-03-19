<?php

$veiculos = [
    'Fusca',
    'Ferrari',
    'Uno'

];

foreach ($veiculos as $key => $value) {
    # code...
    echo 'Chave:' . $key.  '<br>';
    echo 'Veículo:' .$value.  '<br>';
}

$estacionamento = [
  [
    'nome' => 'Fusca',
    'placa' => 'abc123',
    'foto' => 'https://i.pinimg.com/736x/5b/d2/d2/5bd2d28f2ed1b480461d44eae7c1b589.jpg'
  ],
  [
    'nome' => 'Uno',
    'placa' => 'yxz321',
    'foto' => 'https://i.pinimg.com/736x/07/68/bc/0768bcd62e0f1213f0a71ad8d5113552.jpg'
],

];
echo '<h1>Estacionamento Batida Feliz</h1>';
foreach ($estacionamento as $key => $veiculo){
    echo 'Veículo :' . $veiculo['nome'].  '<br>';
    echo 'Placa:' . $veiculo['placa'].  '<br>';
    echo '<img src="' . $veiculo['foto'].  '">';


}



?>
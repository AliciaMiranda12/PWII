<?php
$GLOBALS['resultado'] = 0;
//globals torna a variável global;

calcular(10, 20, '+');

function calcular($valor_1, $valor_2, $operador){

    if ($operador == '+')
   $GLOBALS['resultado'] = somar($valor_1, $valor_2);

    if ($operador == '-')
   $GLOBALS['resultado'] = subtrair($valor_1, $valor_2);

    if ($operador == '*')
   $GLOBALS['resultado'] = multiplicar($valor_1, $valor_2);

    if ($operador == '/')
   $GLOBALS['resultado'] = dividir($valor_1, $valor_2);

}
 

function somar($valor_1, $valor_2){
  //$resultado = $valor_1 + $valor_2; forma mais fácil
  return $valor_1 + $valor_2;

  //está retornando uma resposta dessa operação
}

function subtrair(){
    return $valor_1 - $valor_2;

}
function multiplicar(){
    return $valor_1 * $valor_2;

}
function dividir(){
    return $valor_1 / $valor_2;

}

echo 10 . '+' . 20 .'=' .$GLOBALS['resultado'];



//parametro atribuir um valor para a função









?>
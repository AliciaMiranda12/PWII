<?php
  //Pascal Case-letra maiúscula. Classe é uma tabela
    class Pessoa{ 
        //private-a variável está acesível  internamente na classe
        //public-a variável está  acessível externamente a classe
        //protected- está acessível somente através por herança
         public $nome; //variavel global
         public $idade;

         public function Apresentar(){
            echo "A pessoa $this->nome diz Olá!";

         }

    }
    //js é ponto, php é ->
    //instancia-copia do objeto
    $aluno = new Pessoa(); //pega os dados da pessoa, meio que "copia"
    $aluno->nome = "Matheus";
    $aluno->idade = 20;

    $aluno2 = new Pessoa();
    $aluno2->nome = "Giovanna";
    $aluno2->idade = 18;

    echo '<pre>'; //para visualizar melhor
    //exibe o objeto, tipo console.log
    print_r($aluno);
    print_r($aluno2);

?>
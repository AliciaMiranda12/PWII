<?php
    class Pessoa{ 
         public $nome; 
         public $idade;

        //constructor-função q constroi a classe
        public function __construct($nome,$idade){
        $this->nome = $nome;   //sempre usar this para acessar
        $this->idade = $idade;
        }

         public function Apresentar(){
            echo "A pessoa $this->nome diz Olá!";

         }

    }
    
    $aluno = new Pessoa("Matheus",20); //mesma coisa da página anterior
    $aluno2 = new Pessoa("Giovanna",18);

    echo '<pre>';
    
    print_r($aluno);
    print_r($aluno2);
    

?>
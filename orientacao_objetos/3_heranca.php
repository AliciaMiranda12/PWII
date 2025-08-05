<?php
    class Pessoa{
        public $nome;
        public $email;
    }

    class Aluno extends Pessoa{ //irá herdar atributos de pessoa
        public $rm;
    }

    class Professor extends Pessoa{
        public $formação;
        public function __construct($nome,$email){
            $this->nome=$nome;
            $this->email=$email;
        }
    }

    $aluno = new Aluno();
    $aluno->nome = 'Alicia';
    $aluno->email = 'alicia@gmail.com';


    $professor = new Professor('Carlos','carlos@gmail.com','ADS');



?>
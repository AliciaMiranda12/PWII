<?php
 $etec = [
   "Etec" => [
    "Desenvolvimento de Sistemas" =>[
        "Programação Mobile" => ['Módulo I','Módulo II'],   
        "Programação Web" => ['Módulo I','Módulo II','Módulo III','Módulo IV'],
        "Técnicas Avançadas de Programação de Algoritmos",
        "Inglês" => ['Módulo I','Módulo II','Módulo III']
    ],
    "Administração" =>[
        "Recursos Humanos"=> ['Módulo I','Módulo II'],
        "Gestão de Pessoas",
        "Teoria da Administração",
        "Inglês" => ['Módulo I']
    ]
    ]

 ];
 foreach ($etec as $instituicao => $cursos) {
    echo "$instituicao: ";
    foreach ($cursos as $curso => $detalhes) {
        echo "$curso: ";
        foreach ((array)$detalhes as $chave => $valor) {
            foreach ((array)$valor as $modulo) {
                echo "$modulo ";
            }
        }
    }
}
  
?>
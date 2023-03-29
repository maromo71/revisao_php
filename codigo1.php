<?php
    //incluir o arquivo aluno.php
    require_once('aluno.php');

    //Matricular o aluno pedindo dados ao usuario
    $rm = readline("Digite o rm do aluno: ");
    $nome = readline("Digite o nome do aluno: ");
    $data = readline("Digite a data da matricula: ");
    $turma = readline("Digite a turma que o aluno frequentará: ");

    //Construir um objeto aluno
    $aluno = new Aluno($rm, $nome);
    
    //invocar o metodo matricular
    $aluno->matricular($data, $turma);

    $aluno->exibir_informacoes();
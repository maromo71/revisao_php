<?php
    //incluir o arquivo aluno.php
    require_once('aluno.php');

    //Matricular - pegar do formular
    $rm = $_POST["text_rm"];
    $nome = $_POST["text_nome"];
    $data = $_POST["data_matricula"];
    $turma = "AMS";

    //Construir um objeto aluno
    $aluno = new Aluno($rm, $nome);
    
    //invocar o metodo matricular
    $aluno->matricular($data, $turma);

    $aluno->exibir_informacoes();
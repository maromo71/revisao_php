<?php
    class Aluno {
        //atributos
        private $rm;
        private $nome;
        private $data_matricula;
        private $data_trancamento;
        private $turma;


        //construtor
        public function __construct($rm, $nome) {
            $this->rm = $rm;
            $this->nome = $nome;
        }


        //metodos
        public function matricular($data_matricula, $turma){
            $this->data_matricula = $data_matricula;
            $this->turma = $turma;
            echo "Aluno $this->nome foi matriculado com sucesso\n";
            echo "Sua nova turma é: $this->turma \n";
        }

        public function trancar_matricula($data_trancamento){
            $this->data_trancamento = $data_trancamento;
            echo "Aluno cancelou a matricula\n";
        }

        public function exibir_informacoes(){
            echo "RM do aluno: $this->rm \n";
            echo "Nome do aluno: $this->nome \n";
            echo "Turma: $this->turma \n";
            echo "Data da Matricula: $this->data_matricula \n";
            if( strlen($this->data_trancamento) > 0){
                echo "Data de trancamento: $this->data_trancamento\n";
            }
        }

    }
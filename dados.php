<?php

    class Curso {
        private $nome;
        private $codigo;
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
    
        public function getCodigo() {
            return $this->codigo;
        }
    }
    
    class Aluno {
        private $nome;
        private $matricula;
        private $curso;
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
    
        public function getMatricula() {
            return $this->matricula;
        }
    
        public function setCadastrar(Curso $curso) {
            $this->curso = $curso;
        }
    
        public function getCadastrar() {
            return $this->curso;
        }
    
        public function consultar() {
            echo "Nome do aluno: " . $this->nome . "<br>";
            echo "Matrícula do aluno: " . $this->matricula . "<br>";
            echo "Curso: " . $this->curso->getNome() . "<br>";
            echo "Código do Curso: " . $this->curso->getCodigo() . "<br>";
        }
    }

?>
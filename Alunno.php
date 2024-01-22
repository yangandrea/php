<?php
    class Alunno{
        protected $nome;
        protected $cognome;
        protected $classe;
        protected $eta;

        public function __construct($nome, $cognome, $classe, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->classe = $classe;
            $this->eta = $eta;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function getClasse(){
            return $this->classe;
        }

        public function getEta(){
            return $this->eta;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setCognome($cognome){
            $this->cognome = $cognome;
        }

        public function setClasse($classe){
            $this->classe = $classe;
        }

        public function setEta($eta){
            $this->eta = $eta;
        }

        public function __toString(){
            return "Nome: " . $this->nome . "<br>" . "Cognome: " . $this->cognome . "<br>" . "Classe: " . $this->classe . "<br>" . "Età: " . $this->eta . "<br>";
        }
    }
?>
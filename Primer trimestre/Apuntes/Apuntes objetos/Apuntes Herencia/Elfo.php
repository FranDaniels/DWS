<?php
    class Elfo extends Personaje{
        private $arquero;
        private $flechas;

        public function __construct($nombre,$edad,$arquero,$flechas){
            parent::__construct($nombre,$edad);//Equivale al super
            $this->arquero=$arquero;
            $this->flechas=$flechas;
        }

        public function getarquero(){
            return $this->arquero;
        }

        public function getflechas(){
            return $this->flechas;
        }

        public function setarquero($arquero){
            $this->arquero=$arquero;
        }

        public function setflechas($flechas){
            $this->flechas=$flechas;
        }
    }

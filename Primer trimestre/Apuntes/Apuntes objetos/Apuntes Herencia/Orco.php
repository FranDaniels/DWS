<?php

class Orco extends Elfo{
    private $cabreo;

	public function __construct($nombre,$edad,$arquero,$flechas,$cabreo) {
        parent::__construct($nombre,$edad,$arquero,$flechas);
		$this->cabreo = $cabreo;
	}

	public function getCabreo() {
		return $this->cabreo;
	}

	public function setCabreo($value) {
		$this->cabreo = $value;
	}

}
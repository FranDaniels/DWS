<?php
//Por defecto los atributos son privados y tenemos que cambiarlos nosotros a publicos
class Personaje{
    private $nombre;
    private $edad;
    //static $CONT=18;//En kotlin companion object
    static $AULA=20;
    

    // function __construct($nombre,$edad)
    // {
    //     self::$CONT++;
    //     $this->nombre=$nombre;
    //     $this->edad=$edad;
    // }


    public function ponerParte(){
        self::$AULA++;
    }

    function __toString()
    {
        return 'Nombre: '.$this->nombre.' Edad: '.$this->edad;
    }

	public function __construct($nombre, $edad) {

		$this->nombre = $nombre;
		$this->edad = $edad;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

    static function metodoEstatico(){
        return 'Soy el método estático';
    }

    function pasear(){
        return $this->nombre. ' paseando';
    }

    function pelear(){
        return $this->nombre. ' peleando ';
    }

    function __call($name, $arguments)//Para cuando llames un método que no existe.
    {
        if($name=='pasear'){
            if(count($arguments)>0){
                return $this->nombre.' paseando '.$arguments[0].' horas';
            }else{
                return $this->nombre.' paseando ';
            }
        }
        //return 'Has llamado a '.$name.' con '.$arguments;
    }
}
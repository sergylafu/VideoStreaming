<?php
class Videos {
	private $codigo;
	private $titulo;
	private $cartel;
	private $descargable;
	private $codigo_perfil;
    private $sinopsis;
	
	public function __construct($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinopsis){
		$this->codigo=$codigo;
		$this->titulo=$titulo;
		$this->cartel=$cartel;
		$this->descargable=$descargable;
		$this->codigo_perfil=$codigo_perfil;
        $this->sinopsis=$sinopsis;
	}

	public function __get($atributo){
		
		if (isset($this->$atributo)){
			return $this->$atributo;
		}else{
			return null;
		}
			
	}
	
}
?>
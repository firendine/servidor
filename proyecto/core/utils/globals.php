<?php

 class Globals {
	/********** 
	Definir 2 variables: 
		-$globals de tipo array
		-$instance inicializada a null
	**********/
	private $globals=[];
	private $instance = null;
	/********** 
	 Función getInstance(): 
		 -Tiene que ser accesible sin crear ningún objeto
		 -Comprobará si la variable $instance es null, si lo es creará un nuevo
			 objeto de tipo Globals
		- Devolverá la variable $instance
	**********/
	public static function getInstance() {
		if($this->instance== null){
			$g = new Globals();
		}
		return $this->instance;
	}

	/********** 
	 Función set($key, $value): 
		 -Añadirá $value al array globals con la clave $key (globals[$key] = $value)
	**********/

	public function set($key, $value) {
		$this->globals[$key]=$value;
	}

	/********** 
	 Función get($key): 
		 -Devolverá el valor de globals[$key], o null si no existe $key en el array
	**********/
	public function get($key) {
		if(array_key_exists($key,$this->globals)){
			return $this->globals[$key];
		}else{
			return null;
		}
		
	}
}
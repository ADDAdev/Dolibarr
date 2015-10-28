<?php

	class Persona{

		//Atributos
		public $nombre = array();
		public $apellido = array();


		//Metodos

		public function guardar($nombre, $apellido){
			$this->nombre[] = $nombre;
			$this->apellido[] = $apellido;
		}
		public function mostrar(){
			for($i = 0; $i<count($this->nombre); $i++){
                            self::formato($this->nombre[$i], $this->apellido[$i]);
			}
		}
		public function formato($nombre, $apellido){
			echo "Nombre: ". $nombre . "| Apellido" . $apellido . "<br>";
		}

	}

	echo "<h1><a href=\"Loteria.php\">Loter&iacutea $x</a></h1>";
	$persona = new Persona();
	$persona->guardar("Daniel", "Sanchez");
	$persona->guardar("Uriel", "Hernandez");
	$persona->guardar("Daniel", "Orozco");
        $persona->guardar("Prueba", "Tercera");
	$persona->mostrar();




?>

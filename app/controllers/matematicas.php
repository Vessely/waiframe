<?php 
class matematicas
{
	private $action;

	function __construct($action)
	{	
		$this->action = $action;
		self::do();
	}


	//Funciones privadas.
	private function do()
	{
		switch ($this->action) {
			case 'mostrar':
				self::mostrar();
				break;
			
			default:
				self::error();
				break;
		}
	}

	private function error()
	{
		echo "Función de controlador no encontrado.";
	}

	//Funciones publicas.
	public function mostrar()
	{
		echo "Mostrando matematicas desde un controlador";
	}
}




 ?>
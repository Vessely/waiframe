<?php 


class Router
{
	private $full_url;
	private $proto_url;
	private $parameters;
	private $view;
	private $data;
	private $url_type;
	private $url_par;

	function __construct()
	{
		//Recogemos la url completa.
		$this->proto_url = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		$this->full_url  = htmlspecialchars( $this->proto_url, ENT_QUOTES, 'UTF-8' );

		//Creamos el contenido de la variable parametros.
		$this->parameters = explode(URL_BASE, $this->full_url);


		//Creamos el contenido de la variable view.
		$this->view = $this->parameters[1];

		//Creamos el contenido de la variable data.
		$this->data = explode("/", $this->view);

		//Creamos el valor de la variable url_type.
		$this->url_type = count($this->data);
	}

	//Funciones privadas.
	private function get_url_type()
	{
		if($this->url_type === 3 && strlen($this->data[2]) > 0)
		{
			$this->url_par = $this->data[2];
			return true;
		}
		else{
			return false;
		}

	}


	//Funciones publicas
	public function load($url, $controller, $action)
	{
		$check = self::get_url_type();
		if($check === true)
		{
			$url = explode("/", $url);
			$url = $url[1];

			$this->view = explode("/", $this->view);
			$this->view = $this->view[1];


			if($this->view == $url)
			{
				$do = new $controller( $action );
			}
		}
		else
		{
			echo "AAAAAAAAAAAA";
		}
	}



}

 ?>


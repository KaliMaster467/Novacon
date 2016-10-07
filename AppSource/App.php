<?php 

	class App
	{
		private $_url = "";
		private $_controller = "";
		private $_fileController = "";		

		function __construct()
		{
			$this->setUrl();
			//print_r($this->_url);

			if(empty($this->_url[0]))
			{
				$this->DefaultController();
				return false;
			}else{

				$this->_fileController = "CoreSource/Controllers/" . $this->_url[0] . ".php";

				if(file_exists($this->_fileController))
				{
					require $this->_fileController;
					$this->_controller = new $this->_url[0];

				}else{
					require "CoreSource/Controllers/Error.php";
					$this->_controller = new Error();
					return false;
				}

				if(isset($this->_url[2]))
				{
					$this->_controller->{$this->_url[1]}($this->_url[2]);

				}else{

					if(isset($this->_url[1]))
					{
						$this->_controller->{$this->_url[1]}();
					}
				}				
			}
		}
		public function setUrl()
		{
			$this->_url = isset($_GET['url']) ? $_GET['url'] : null;
			$this->_url = rtrim($this->_url, "/");
			$this->_url = explode("/", $this->_url);		
		}
		public function getUrl()
		{
			return $this->_url;
		}
		public function DefaultController()
		{
			require "CoreSource/Controllers/Index.php";
			$this->_controller = new Index();
			
		}
	}

 ?>
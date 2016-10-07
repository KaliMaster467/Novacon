<?php 

	class Controller
	{

		protected $_view = "";
		protected $_model = "";

		function __construct()
		{
			//echo "Main cont";
			$this->_view = new View();
		}
	}

 ?>
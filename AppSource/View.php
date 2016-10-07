<?php 

	class View
	{	
		function __construct()
		{
			//echo "Vista";
		}

		public function Render($pagina)
		{
			require "CoreSource/Views/" . $pagina . ".php";
		}
	}

 ?>
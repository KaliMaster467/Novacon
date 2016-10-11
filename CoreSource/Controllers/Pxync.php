<?php 

	class Pxync extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->_view->Render('pxync');
		}
	}

 ?>
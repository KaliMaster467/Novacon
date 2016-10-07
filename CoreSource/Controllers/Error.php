<?php 

	class Error extends Controller
	{
		function __construct()
		{
			parent::__construct();	
			//echo "Error papu";
			$this->_view->Render('Error');
		}
	}

 ?>
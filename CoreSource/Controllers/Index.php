<?php 

	class Index extends Controller
	{
		function __construct()
		{
			parent::__construct();
			//echo "Controladro Index";
			$this->_view->Render('index');
		}
	}
 ?>
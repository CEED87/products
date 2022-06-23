<?php

	class ShowPageIsNotFoundController extends Controller 
	{
		public function act() 
		{
			$templatePage404 = $this->getView()->render('templates/error404.php');
		 	$contentHTML = ['title' => '404', 'content' => $templatePage404];

			echo $this->getView()->render('templates/layout.php', $contentHTML);
		}
	}


	

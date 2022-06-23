<?php

	class ShowAddProductFormController extends Controller 
	{
		public function act() 
		{
			$templateForm = $this->getView()->render('templates/productAddForm.php');
		    $contentForm = ['title' => 'Product Add', 'content' => $templateForm];

			echo $this->getView()->render('templates/layout.php', $contentForm);
		}
	}

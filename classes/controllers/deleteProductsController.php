<?php
	class DeleteProductsController extends Controller 
	{
		public function act() 
		{ 
			$this->getModel()->deleteProducts($_POST['massDelete']);
			
			return (new ShowProductsController)->act();
		}
	}

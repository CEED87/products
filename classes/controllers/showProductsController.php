<?php

	class ShowProductsController extends Controller 
	{
		public function act() 
		{
			$products = ['products' => $this->getModel()->getProducts()];
		    $templateProducts = $this->getView()->render('templates/products.php', $products);
		    $contentHTML = ['title' => 'Product List', 'content' => $templateProducts];

			echo $this->getView()->render('templates/layout.php', $contentHTML);
		}
	}

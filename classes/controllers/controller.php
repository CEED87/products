<?php

	abstract class Controller 
	{
		private $model;
		private $view;
		
		function __construct() 
		{
			$this->model = ProductsModel::getInstance();
			$this->view = Template::getInstance();
		}
		
		protected function getModel() 
		{
			return $this->model;
		}

		protected function getView() 
		{
			return $this->view;
		}

		abstract function act();

	}


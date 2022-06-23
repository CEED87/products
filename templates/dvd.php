<html>
	<head>
		<title>
			<? echo array_key_first($arr)  ?>
		</title>
	</head>
	<body>	

		<h1><? echo  strtoupper(array_key_first($arr)) ?></h1>
			
		<ul><? 

	        $parameters = ['getSku', 'getName', 'getPrice', 'getSize'];
	        
	        foreach ($parameters as $key => $value): 
	       		 $parameter = $arr[array_key_first($arr)]->$value();
	        		echo "<li>$parameter</li>"; endforeach 	
    								
		?></ul>

		
	</body>
</html>
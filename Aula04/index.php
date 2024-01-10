<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Métodos Especiais</title>
</head>
<body>

<pre>	
	<?php

	require_once'Caneta.php';
	$c1= new Caneta("Bic","Azul",1.5);
	$c2= new Caneta("Bravo","Vermelha",0.5);
	//Acesso via métodos
	//$c1->setModelo("BIC");
	
	//Acesso Direito
	//$c1->modelo="Bai";
	
	//$c1->setPonta("1.5");
	//print_r($c1);

	//$c2 =new Caneta();
	//$c2-> setModelo($c1->getModelo());


	//$c2->setPonta(1);

	//print_r($c2);

	//print("Eu tenho uma caneta da {$c1->getModelo()}, de ponta {$c1->getPonta()}");
	print_r($c1);
	print_r($c2);
	?>
</<pre>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 03 Visibilidades</title>
</head>
<body>
	<pre>
	<?php 
	 require_once 'Caneta.php';


	 $c1 = new Caneta;
	 //$c1->ponta="2.5";
	 $c1->modelo ="Bravo";

	 print_r($c1); 
	 $c1->rabiscar();

	 $c1->destampar(); 
?>
</pre>

</body>
</html>
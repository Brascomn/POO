<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $b[1] = new Pessoa("Bráulio",32,"M");
        $b[2]= new Pessoa("Valdir",32,"M");

        $c[0] = new Livro("Um Mundo sem Violencia","Braulio Chimuanga",300,$b[2]); 
        $c[1] = new Livro("O Mundo para a Felicidade","Maria de Souza",360,$b[1]);
        $c[2] = new Livro("Devolper Angola","Chimuanga",450,$b[1]);

        $c[1]->abrir();
        $c[0]->folhear(100);
        // print_r($c[1]);
       // $c[0]->detalhes();
        $c[1]->detalhes();
        $c[1]->avancarPag(100);
        $c[1]->detalhes();
       // $c[2]->folhear(5);
       // $c[2]->detalhes();
    
    ?> 
        </pre>
    
</body>
</html> 
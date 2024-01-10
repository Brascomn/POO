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
    include_once 'video.php';
    include_once 'Gafanhoto.php';
    include_once 'Visualizacao.php';
    
    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 14 de POO");
    $v[2] = new Video("Aula 15 de POO");
    $g[3] = new Gafanhoto("Bráulio",27,"M", "Brascomn");
    $g[4] = new Gafanhoto("Sandrenha",25,"M", "QUEMIRASBOBO?");
    
    $b[4] = new Visualizacao($g[3],$v[2]); // AGREGACAO DE VALORES
    $b[5] = new Visualizacao($g[3],$v[0]); // AGREGACAO DE VALORES
   // $b[4]->avaliar();
    $b[5]->avaliarNota(5);
    $b[4]->avaliarPorc(0);
   // print_r($b);
    print_r($b) ; 
    
    //  usamos ?? em vez de if 
    $name ;
    var_dump($name??'Nome não existe');
    
    var_dump($b[3]??'Nome existe {$b[3]}');
    var_dump($b[4]??$b[5])
    //AUL7


    ?>
   
</pre>
</body>
</html>
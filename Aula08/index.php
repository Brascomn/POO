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
        require_once '../Aula07/Lutador.php';
        require_once 'C:\xampp\htdocs\poo\Aula07\Lutador.php';
        require_once 'Luta.php';
        $l=array();
        $l[0] = new Lutador("Braulio Valdir","Angola",27,1.86,82.9, "MASCULINO", 10,2,0);
        $l[1] = new Lutador("CHIMUANGA","NAMIBIA",25,1.76, 80,"MASCULINO", 15,2,0);
        $l[3] = new Lutador("FERNANDA","NIGERIA",25,1.76, 80,"FEMENINO", 35,2,0);
        $l[4] = new Lutador("NDONFILIA","CONGO",25,1.76, 80,"FEMENINO", 5,2,0);
    
        $uec01 = new Luta();
        $uec01->marcarLuta($l[4],$l[3]);
        $uec01->lutar();
        $l[1]->status();
        $l[0]->status();
        $l[3]->status();
        $l[4]->status();
        //ESTATISTICA MENTE , categoria De sexo diferente E SO H=H E M=M
        ?>
    </pre>
</body>
</html>
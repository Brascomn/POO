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
        require_once 'Lutador.php';
        $l=array();
        $l[0] = new Lutador("Braulio Valdir","Angola",27,1.86, 115, 11,2,0);
        $l[1] = new Lutador("CHIMUANGA","NAMIBIA",54,1.76, 85, 201,2,0);
        $l[1]->status();
        $l[1]->perderLuta();
        $l[1]->status();
        $l[0]->apresentar();
        ?>
    </pre>
</body>
</html>
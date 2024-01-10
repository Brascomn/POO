<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero{
    function UsarBolsa(){
        echo "<p>USANDO BOLSA</p>";
    }
    function locomover(){
        echo "<p>SALTANDO</p>";
    }
}

?>
<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    //SOBRECARGAPOSIÇÃO
   // function  emitirSom(){ echo "<p>AU!AU!AU!AU!</p>";  }

    function  reagir($frase) {
        if($frase =="Toma Comida" || $frase == "Ola" ){
           
            echo "<p>AU!AU!AU!AU!</p>";  
            echo "<p>ABANAR E LATIR.</p>";  
        }else{
            Echo "<p>ROSNAR</p>";
        }
    }

    function reagirHora($hora,$min){
        
        if ($hora < 12) {
            echo "<p>ABANAR</p>"; 

        }elseif ($hora >= 12) {
            echo "<p>IGNORAR</p>"; 
        
        }else{
            echo "<p>ABANAR E LATIR</p>"; 
        }
    }

    function reagirDono($dono){
        
        if ($dono==true) {
            echo "<p>ABANAR</p>";  
        }else {
            echo "<p>ROSNAR E LATIR</p>";
        }
    }

    function  reagirIdade($idade,$peso){
        
        if ($idade<5) { 

            if ($peso<10) {
                echo "<p>ABANAR</p>";  
            }else{
                
                echo "<p>LATIR</p>";
             }
            
        }else {
            if ($peso<10) {
                # code...
                echo "<p>ROSNAR</p>";
            }else{
                
                echo "<p>IGNORAR</p>";
            }
        }
    }
} 
 

 
?>
<?php

class Isqueiro{

	var $cor;
	var $tamanho;
	var $gas;
	var $modelo;
 
 function Estado(){
 	if ($this->gas ==true) {
 		echo "</br>Esqueiro Aceso";
 	} else{

 		echo "</br>Esqueiro Apagado";
 	}

 }

 function ligado(){

	$this->gas = true;
 }
 function desligado(){
 	$this->gas = false;
 }

}
?>
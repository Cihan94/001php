<?php
function graden($tempC) {
$tempF = $tempC * 9 / 5 + 32;
echo 'Temperatuur in Fahrenheit = ' . $tempF;

}
echo graden(47) . "<br>"; 

////////////////////////////////////////////////////////////////////////////////////////////////////////

function delen($getal) {
$a = $getal % 3;
if ($a == 0){
	return true;
}
else {
	return false;
 
}
}
                                     
echo delen(9) . "<br>";



////////////////////////////////////////////////////////////////////////////////////////////////////////////

function tekst($tekst){
echo strrev($tekst);
}
echo tekst(123456789). "<br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////

$c = 12;	// global scope
telOp(6,7);
echo "Jawel hoor c = ".$c;

function telOp($a, $b) {
		global $c; // verwijst naar de globale variabele $c 
		$c = $a + $b; 
		echo "c = ".$c."<br>";
}


?>
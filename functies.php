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
echo tekst(123456789);
?>
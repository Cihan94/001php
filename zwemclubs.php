<html>
<head>
<style>
table, td {
	
	border: 1px solid black;
	border-collapse: collapse; 
}
</style>
</head
<body>
<table>
<tr>
<td>
<?php
	$zclub = ["De spartelkuikens" => 25, "De waterbuffels" => 32, 
	"Plonsmderin" => 11, "Bommetje" => 23 ];
foreach ($zclub as $label => $aantalZwemmers) {
		echo  $label . " : " . $aantalZwemmers . "<br>" ;		
	}
?>
</td>
</tr>
</table>
</body>
<html>				

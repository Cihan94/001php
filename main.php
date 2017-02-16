<?php include("header.php");

	echo "Hello " . $_GET["roepnaam"]."<br>";
	echo "Je fav kleur is : ". $_GET["favkleur"];
	
?>

<div style="background-color:<?php echo $_GET["favkleur"]?>; height:250px; width:250px";/></div>

<?php

 include("footer.php");
 
?>
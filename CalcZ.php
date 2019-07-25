<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="<?php  echo $_SERVER["PHP_SELF"];   ?>" method="post">

	Zahl1<br>
	<input type="text" name="zahl1"><br>

	Berechnung<br>
	<select name="rechenart">
		<option value="addieren">+ addieren</option>
		<option value="subtrahieren">- subtrahieren</option>
		<option value="multiplizieren">* multiplizieren</option>
		<option value="dividieren">/ dividieren</option>
	</select>
	<br>
	Zahl2<br>
	<input type="text" name="zahl2"><br>

	<input type="submit" value="Absenden"><br>

</form>

<?php
if(isset($_POST["zahl1"]))
{
	$zahl1=(float)$_POST["zahl1"];
	$zahl2=(float)$_POST["zahl2"];
	$rechenart=$_POST["rechenart"];

	echo "Zahl1: $zahl1";
	echo "<br>\n";
	echo "Zahl2: $zahl2";
	echo "<br>\n";
	echo $rechenart;
	echo "<br>\n";

	switch($rechenart)
	{
		case "addieren": $ergebnis=$zahl1+$zahl2;
				break;
		case "subtrahieren": $ergebnis=$zahl1-$zahl2;
				break;
		case "multiplizieren": $ergebnis=$zahl1*$zahl2;
				break;
		case "dividieren": 
				if($zahl2==0)
				{
					$ergebnis="Keine Divisionen durch null!";
				}
				else
				{
					$ergebnis=$zahl1/$zahl2;	
				}
				
				break;
		default: $ergebnis="keine gültige Rechenart";
	}

	echo "ERGEBNIS:" . $ergebnis;

}
?>

</body>
</html>
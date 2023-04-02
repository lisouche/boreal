<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="reservationChambre.css">
	
</head>
<body background="fond.jpg">
	<center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");


$a=$_POST['nom'];
$b=$_POST["nombrePersonne"];
$c=$_POST['nombreChambre'];
$d=$_POST['placeLits'];
$e=$_POST['dateDebut'];
$f=$_POST['dateFin'];
$g=$_POST['montant'];
$h=$_POST['choix'];

$req1="INSERT INTO chambre (nom,nombrePersonne,nombreChambre,placeLits,dateDebut,dateFin,montant,animaux) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
mysql_query($req1);
echo "<h1>Votre réservation a été prise en compte!</h1>";
header("index.html");

mysql_close();
?>
<button><a href="index.html">Retour au menu</a></button>
</center>
</body>

</html>
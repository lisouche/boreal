<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body background="fond.jpg"><center>
	<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST['choixBurger'];
$b=$_POST['choixFrite'];
$c=$_POST['choixPannini'];
$d=$_POST['choixWrap'];
$e=$_POST['choixBoisson'];
$f=$_POST['choixFormule'];
$g=$_POST['dateJour'];


$req1="INSERT INTO commande (burger,frite,pannini,wrap,boisson,formule,dateJour) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
mysql_query($req1);

echo"<p>Votre commande est en cours de préparation !</p>";

mysql_close();
?>

</body>
<button><a href="index.html">Retour au menu</a></button></center>
</html>
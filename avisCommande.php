<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="choixBurger.css">
</head>
<body background="fond.jpg">
	<center>
	<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST['login'];
$b=$_POST['etoile'];
$c=$_POST['commentaire'];

$req1="INSERT INTO aviscommande (login,etoile,commentaire) VALUES ('$a','$b','$c')";
mysql_query($req1);

echo"<h1> Votre avis va nous aidez à nous améliorer, merci !</h1>";

mysql_close();
?>
<button><a href="index.html">Retour au menu</a></button>
</center>
</body>
</html>
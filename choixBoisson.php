<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="choixBurger.css">
</head>
<body background="fond.jpg"><center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST['choixBoisson'];
$b=$_POST['nom'];
$c=$_POST['dateJour'];
$d=$_POST['quantite'];



$req1="INSERT INTO boisson (nomBoisson,nom,dateJour,quantite) VALUES ('$a','$b','$c','$d')";
mysql_query($req1);

echo"<h1> Commande en cours de préparation !</h1>";


mysql_close(); ?>
</body>
<button><a href="index.html">Retour au menu</a></button></center>
</html>

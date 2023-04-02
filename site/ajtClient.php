<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="choixBurger.css">
	<title></title>
</head>
<body background="fond.jpg"><center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$b=$_POST['nom'];
$c=$_POST['prenom'];
$d=$_POST['telephone'];
$e=$_POST['mail'];
$f=$_POST['login'];


$req1="INSERT INTO client (nom,prenom,telephone,mail,login) VALUES ('$b','$c','$d','$e','$f')";
mysql_query($req1);

echo"<h1> Création du compte terminée </h1>";


mysql_close(); ?>
</body>
<button><a href="index.html">Retour au menu</a></button></center>
</html>

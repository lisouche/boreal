<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body><center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotel_1");

$a=$_POST['login'];
$b=$_POST['mdp'];



$req1="INSERT INTO connexion(login,mdp) VALUES ('$a','$b')";
mysql_query($req1);

header("Location:ajtClient.html");
mysql_close();
?>
</body>
<button><a href="index.html">Retour au menu</a></button></center>
</html>

<?php 
$host = "winsql.vereb.dc";
$user = "diak79";
$pass = "d4eZu1";
$database = "diak79";

$kapcsolat = mysqli_connect($host,$user,$pass,$database);

//a kapcsolat ellenőrzése
if(!$kapcsolat)
{
	die('Kapcsolódási hiba ('.mysqli_connect_errno().') '.mysqli_connect_error());
}


mysqli_query($kapcsolat,"SET NAMES 'UTF8'");
mysqli_query($kapcsolat,"SET CHARACTER SET 'UTF8'");


?>
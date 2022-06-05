<?php
try
{
	$bdd=new PDO('mysql:host=localhost;dbname=gestion','root','');

}
catch(exception $e){
	die('ERREUR:'.$e->getMessage());
}
?>
<?php
include_once('script/connexion_bdd.php');
//selection entree
$requet=$bdd->prepare('DELETE FROM sujets WHERE id=?');
$requet->execute(array($_GET['id']));
$donnees=$requet->fetch();
header('location:supprimer_sujets.php?ok');
?>
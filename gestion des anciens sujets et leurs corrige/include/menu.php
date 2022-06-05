<style>
		.navbar {
			font-family: Agency FB,Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
			font-weight: ;
			font-size:25px;
	</style>
			<nav class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li class="active"> <a href="accueil.php">ACCUEIL</a> </li>
					<li> <a href="enregistre_les_sujets.php">ENREGISTRE LES SUJETS</a> </li>
					<li> <a href="liste_des_sujets.php">LISTE DES SUJETS ET LEURS CORRIGES</a> </li>
					<li> <a href="modifier_sujets.php">MODIFIER SUJETS</a> </li>
			<li> <a href="supprimer_sujets.php">SUPPRIMER SUJET</a> </li>
</ul>
<form class="navbar-form pull-right" action="rechercher_ok.php" method="GET">
<input type="text" style="width:150px" class="input-small"
placeholder="Recherche" value="<?php if (isset($_GET['valeur_rechercher'])){ if($_GET['valeur_rechercher']!=""){echo $_GET['valeur_rechercher'];}else{}}else{} ?>" name="valeur_rechercher">
<button type="submit" class="btn btn-primary btn-md"><span
class="glyphicon glyphicon-search"></span> Chercher  une sujet</button>
</form>
</nav>
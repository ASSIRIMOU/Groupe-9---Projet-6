<?php
if ($_GET['valeur_rechercher']!="")
{
include("script/connexion_bdd.php");
?>
<?xml version="1.0" encoding="ISO­8859­1"?>
<!DOCTYPE html PUBLIC "­//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1­strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
       <title>Recherche Terminée</title>
       <link rel="icon" href="logo.jpeg">
    </head>
    <body>
<?php include('include/menu.php') ?>
<?php include('include/header.php') ?><br>
<div class="row">
<div class="col-lg-3"></div>


<div class="col-lg-6">
		<table class="rechercher" align="center">
	    <tr>
		    <td>
			<form class="navbar-form pull-right" action="rechercher_ok.php" method="GET">
<input type="text" style="width:150px" class="input-small"
placeholder="Recherche" value="<?php if (isset($_GET['valeur_rechercher'])){ if($_GET['valeur_rechercher']!=""){echo $_GET['valeur_rechercher'];}else{}}else{} ?>" name="valeur_rechercher">
<button type="submit" class="btn btn-primary btn-md"><span
class="glyphicon glyphicon-search"></span> Chercher Adherent</button>
</form>
			</td>
		<tr>
	    </table>
		<br>
		    <h4 align='center' class='titre'>Resultat de la recherche de ' <?php echo  htmlspecialchars(strtolower($_GET['valeur_rechercher']));?> ':</h4>
		<?php
        $affichage=$bdd->prepare("SELECT * FROM adherent WHERE nom=? or prenom=? or nom REGEXP ? or prenom REGEXP ? or tel=? or tel REGEXP ? ");
        $affichage->execute(array($_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher']));
		$test=$affichage->fetch();
		if ($test['id']=="")
		{
		echo '<center><div>
<ul class="list-group">
<li class="list-group-item list-group-item-danger">Aucun resultat trouvé pour votre recherche...!</li>
</ul>
</div></center>';
		}
		else
		{
		$nb=$bdd->prepare("SELECT COUNT(*) AS nombre FROM adherent WHERE nom=? or prenom=? or nom REGEXP ? or prenom REGEXP ?  or tel=? or tel REGEXP ? ");
		$nb->execute(array($_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher']));
		$nb = $nb->fetch();
		$nombre=$nb['nombre'];
		if ($nombre<=1)
		{
		$resultat=" seul résultat";
		}
		else
		{
		$resultat="résultats";
		}
		echo "<center><div>
<ul class='list-group'>
<li class='list-group-item list-group-item-success'>$nombre $resultat</li></ul></div></center>";
		
		?>
		<table class="table table-condensed" style="background-color:skyblue"> 
                    <thead> 
                        <tr>
                            <th>NOM</th> 
                            <th>PRENOM</th> 
                            <th>TELEPHONE</th> 
							<th>PLUS D'INFO</th>
                        </tr> 
                    </thead>
		<?php
		$affichage=$bdd->prepare("SELECT * FROM adherent WHERE nom=? or prenom=? or nom REGEXP? or prenom REGEXP ?  or tel=? or tel REGEXP ?");
        $affichage->execute(array($_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher'],$_GET['valeur_rechercher']));
        while($donnees = $affichage->fetch())
            {
        ?>
		<tr>
		    <td><?php echo htmlspecialchars($donnees['nom']);?></td>
			<td><?php echo htmlspecialchars($donnees['prenom']);?></td>
			<td><?php echo htmlspecialchars($donnees['tel']);?></td>
			<td><a href="profil.php?id=<?php echo $donnees['id']?>"><button class="btn btn-primary btn-md">Profil complet</button></a></td>
		</tr>
		<?php
			}
		?>
		</table>
		</div>
			<div class="col-lg-2"></div>
			</div>
	<?php 
	    }
	?>
	</body>
</html>
<?php
}
else
{
?>
<script>
alert("Veillez remplir tout les champs avant de continuer");
history.back();
</script>
<?php
}
?>
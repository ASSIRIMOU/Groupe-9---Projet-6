<?php
if ($_GET['id']!="")
{
include("script/connexion_bdd.php");
$reponse = $bdd->prepare("SELECT * FROM sujets WHERE id=?");
$reponse->execute(array($_GET['id']));
$donnees=$reponse->fetch();
    if($donnees['id']!="")
	{
session_start();
$_SESSION['id']=$_GET['id'];
?>
<html>
    <head>
	    <title>Modification du profil</title>
		<style>@import "style.css"</style>
		<meta charset="UTF-8">
		<link href="LOGO.JPG" rel="icon">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
<?php include('include/menu.php') ?>

<div class="col-lg-12"><?php include('include/header.php') ?></div>

<div class="row">
<div class="col-lg-2"></div>


<div class="col-lg-8">	  
    <h3><center>Modification</center></h3>
    <br>
	
		<form class="form-horizontal col-lg-67" action="traitement_modifier.php" method="post">
<div class="form-group">
<legend><b><i><center>IDENTIFICATION EPREUVE :</center></i></b></legend>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-3" name="code" value="<?php echo strtoupper ($donnees['code']);?>">code </label>
<div class="col-lg-8">
<input type="text" class="form-control" name="code" value="<?php echo strtoupper ($donnees['code']);?>">
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="textarea" class="col-lg-3" name="faculte">FACULTE  </label>
<div class="col-lg-8">
<input type="textarea" class="form-control" name="faculte"  value="<?php echo $donnees['faculte'];?>">
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="select" class="col-lg-3" name="dep">DEP </label>
<div class="col-lg-8">
<select id="select" class="form-control" name="dep" value="<?php echo $donnees['dep'];?>">
<option name="masculin">MATH</option>
<option name="feminin">INFO</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-3" name="anneac">ANNE ACADEMIQUE  </label>
<div class="col-lg-8">
<input type="text" class="form-control"  name="anneac" value="<?php echo $donnees['anneac'];?>">
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-3" name="niveaux">NIVEAUX </label>
<div class="col-lg-8">
<input type="text" class="form-control" name="niveaux"  value="<?php echo $donnees['niveaux'];?>">
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-3" name="sem">SEMESTRE</label>
<div class="col-lg-8">
<input type="text" class="form-control" name="sem"  value="<?php echo $donnees['sem'];?>">
</div>
</div>
</div>
<div class="form-group">
<label for="text" class="col-lg-3" name="credi">CREDI</label>
<div class="col-lg-8">
<input type="text" class="form-control" name="credi"  value="<?php echo $donnees['credi'];?>">
</div>
</div>
</div>
<center>
<button type="submit" class="btn btn-success" name="submit">MODIFIER</button>
<button type="reset" class="btn btn-info">ANNULER</button>
</center>
</form>
<div class="col-lg-2"></div>
	</body>
</html>
<?php
    }
	else
	{
	header("location:modifier_epreuve.php");
	}
}
else
{
header("location:modifier_epreuve.php");
}
?>
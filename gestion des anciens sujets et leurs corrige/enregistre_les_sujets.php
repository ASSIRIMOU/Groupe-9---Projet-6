<?php
    if(isset($_POST['submit']))
    {
        include('script/connexion_bdd.php');
$requet = $bdd-> prepare ('INSERT INTO sujets(code,faculte,dep,anneac,niveaux,sem,credi) VALUES (NULL,?,?,?,?,?,?,?)');
$requet-> execute(array($_POST['code'],$_POST['faculte'],$_POST['dep'],$_POST['anneac'],$_POST['niveaux'],$_POST['sem'],$_POST['credi']));
        $msg="<center><div class='alert alert-success  alert-block'><font size='5'> sujets <b>". $_POST['code']." ". $_POST['credi']." </b>ajouté avec succès</font></div></center>";
    }

?>


<!DOCTYPE HTML>
<html>
<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<meta charset="utf-8">
				<link rel="stylesheet" href="style.css">
	</head>
<body>
	<center>
<?php include('include/menu.php') ?>
<?php include('include/header.php') ?><br>

<div class="row">
<div class="col-lg-3"></div>


<div class="col-lg-6">
<form class="form-horizontal col-lg-67 action="#" method="post">
<?= isset($msg) ? $msg : '' ?>
<div class="form-group">
<legend><b><i><center>ENREGISTREMENT DES SUJETS :</center></i><b></legend>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-2" name="code">CODE DE L'ÚE </label>
<div class="col-lg-10">
<input type="text" class="form-control" name="code" id="text">
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-2" name="faculte">FACULTE DE : </label>
<div class="col-lg-10">
<input type="text" class="form-control" name="faculte" id="text">
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="select" class="col-lg-2" name="dep">DEPARTEMENT: </label>
<div class="col-lg-10">
<select id="select" class="form-control" name="dep">
<option name="masculin">MATH</option>
<option name="feminin">INFO</option>
<option name="autre">Autre</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-2" name="anneac">ANNE ACCADEMIQUE  </label>
<div class="col-lg-10">
<input type="text" class="form-control" id="text" name="anneac">
</div>
</div>
<div class="row">
<div class="form-group">
<label for="select" class="col-lg-2" name="niveaux">NIVEAUX  </label>
<div class="col-lg-10">
<select id="select" class="form-control" name="niveaux">
<option name="licence i">LICENCE I</option>
<option name="licence ii">LICENCE II</option>
<option name="licence iii">LICENCE II</option>
<option name="master i">MASTER I</option>
<option name="master ii">MASTER II</option>
</select>
</div>
</div>
</div>
<p></p>
<label for="photo">
	ajouter une photo(formats supportes:.png,.jpeg,.jpg,.gip|taille maximale: 3 mo):<br>
</label>
<input type="file" name="photo" id="photo"/>
<p></p>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-2" name="semestre">SEMESTRE : </label>
<div class="col-lg-10">
<input type="text" class="form-control" name="sem" id="text">
</div>
<div class="row">
<div class="form-group">
<label for="text" class="col-lg-2" name="credi">NOMBRE DE CREDI : </label>
<div class="col-lg-10">
<input type="text" class="form-control" name="credi" id="text">
</div>
</div>
<center>
<button type="submit" class="btn btn-success" name="submit">ENVOYER</button>
<button type="reset" class="btn btn-info">ANNULER</button>
</center>
</form>
<div class="col-lg-2"></div>
</div>
</center>
</body>
</html>
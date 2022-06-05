<?php
		include('script/connexion_bdd.php');
		$reket=$bdd->prepare('SELECT * FROM sujets WHERE id=?');
		$reket->execute(array($_GET['id']));
		$donnees=$reket->fetch();
?>
<html>
	<head>
		<title>PROFILS DE <?php echo strtoupper($donnees['code'])  ?> </title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
<body>
<script>
function retour(){
	history.back();
}
function imprimer(){
	print();
}
</script>
<center>
	<br>
	<h3><u style="font-family:forte;">PROFIL COMPLET DES EPREUVE <?php echo $donnees['code']  ?></u></h3><br><br>
	<table class="profils" border="2">
		<tr>
			<th align="left">NOM</th><td><?php echo $donnees['code']  ?></td>
		</tr>
		<tr>
			<th>FACULTE</th><td><?php echo $donnees['faculte']  ?></td>
		</tr>
		<tr>
			<th>DEPARTEMENT</th><td><?php echo $donnees['dep']  ?></td>
		</tr>	
		<tr>
			<th>ANNE ACADIQUE</th><td><?php echo $donnees['anneac']  ?></td>
		</tr>
		<tr>
			<th>NIVEAUX</th><td><?php echo $donnees['niveaux']  ?></td>
		</tr>
				<tr>
			<th>SEMESTRE</th><td><?php echo $donnees['sem']  ?></td>
		</tr>
		<tr>
			<th>NOMBRE DES CREDI</th><td><?php echo $donnees['credi']  ?></td>
		</tr>

	</table>
</center>
<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<center>
<button type="reset" class="btn btn-info" onclick="imprimer()">IMPRIMER</button>
<button type="submit" onclick="retour()" class="btn btn-success">RETOUR</button>
</center>
	<br>
	<br>
<style>
.profils{
width:700px;
height:500px;
font-size:20px;
}
.profils td{
font-family:Arial;
text-align:center;
}
.profils th{
font-family: Agency FB,Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
text-align:center;
font-weight:bold;
}
.button{
height:40px;
background:green;
border:none;
font-weight:bold;
opacity:0.7;
width:120px;
}
.button:hover{
height:40px;
background:green;
border:none;
font-weight:bold;
opacity:1;
cursor:pointer;
}
</style>
</body>
</html>	
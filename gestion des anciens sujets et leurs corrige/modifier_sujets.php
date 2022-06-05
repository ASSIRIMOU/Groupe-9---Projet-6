	<! DOCTYPE html>
<html>
	<head>
		<title>Modifier les epreuvet</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
<body>
<?php include('include/menu.php') ?>
<?php include('include/header.php') ?><br>
<div class="row">
<div class="col-lg-3"></div>


<div class="col-lg-6">
        <h3>Modifier les epreuve</h3>
        <br>
                <table class="table table-condensed" style="background-color:skyblue"> 
                    <thead> 
                        <tr>
                            <th>CODE UE</th> 
                            <th>CREDI</th> 
                            <th>SEMESTRE</th> 
							<th>ANNA ACADEMIQUE</th>
							<th>MODIFIER</th>
                        </tr> 
                    </thead>
        <?php
            include_once('script/connexion_bdd.php');
            $requet = $bdd->query('SELECT * FROM sujets ORDER by code');
            while($donnees = $requet->fetch())
            { ?>
             
                    <tbody> 
                        <tr>
                            <td><?php echo strtoupper ($donnees['code']);?></td>
                            <td><?php echo strtoupper ($donnees['credi']);?></td>
							<td><?php echo strtoupper ($donnees['sem']);?></td>
                            <td><?php echo strtoupper ($donnees['anneac']);?></td>
			    <td><a href="modification.php?id=<?php echo $donnees['id']; ?>"><button class="btn btn-default btn-md">MODIFIER</button></a></td>
                        </tr> 
                    </tbody>      
        
        <?php
            
            }
        ?>
                </table>
</div>
			<div class="col-lg-2"></div>
			</div>
     <br>
     <br>
     <br>
</body>
</html>
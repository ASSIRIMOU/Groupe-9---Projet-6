<! DOCTYPE html>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
				<script>
		function warning_delete(id){
			if(confirm('VOULEZ-VOUS VRAIMENT SUPPRIMER CET EPREUVE ?')){
			document.location='traitement_suppression.php?id='+id;	
			}
			else{
			
			}
		}	
		
		</script>
	</head>
<body>
	<center>
<?php include('include/menu.php') ?>
<?php include('include/header.php') ?><br>

<div class="row">
<div class="col-lg-3"></div>


<div class="col-lg-6">
        <br>
        <h3>Liste des epreuve </h3>
        <br>
                <table class="table table-condensed" style="background-color:skyblue"> 
                    <thead> 
                        <tr>
                            <th>CODE</th> 
                            <th>FACULTE</th> 
                            <th>DEP</th> 
							<th>PLUS D'INFO</th>
                        </tr> 
                    </thead>
        <?php
            include_once('script/connexion_bdd.php');
            $requet = $bdd->query('SELECT * FROM sujets ORDER BY code');
            while($donnees = $requet->fetch())
            { ?>
             
                    <tbody> 
                        <tr> 
                            <td><?php echo strtoupper ($donnees['code']);?></td>
                            <td><?php echo strtoupper ($donnees['faculte']);?></td>
                            <td><?php echo strtoupper ($donnees['dep']);?></td>
							<td><a onclick="warning_delete(<?php echo $donnees['id']?>)"><button class="btn btn-danger btn-md">Supprimer</button></a></td>
                        </tr> 
                    </tbody>      
        
        <?php
            
            }
        ?>
                </table>
</div>
			<div class="col-lg-2"></div>
			</div>
    </center>
     <br>
     <br>
     <br>
</body>
</html>
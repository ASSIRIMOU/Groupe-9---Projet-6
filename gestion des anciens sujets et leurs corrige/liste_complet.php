<html>
	<head>
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
	<h3><u style="font-family:forte;">LISTE COMPLET DES EPREUVE </u></h3><br><br>
	<table class="profils" border="2">
		<thead> 
                        <tr>
                            <th>CODE</th> 
                            <th>FACULTE</th> 
                            <th>DEPARTEMENT</th> 
							<th>ANNE ACADEMIQUE</th>
							<th>NIVEAUX</th>
							<th>SEMESTRE</th>
							<th>CREDI</th>
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
							<td><?php echo strtoupper ($donnees['anneac']);?></td>
							<td><?php echo strtoupper ($donnees['niveaux']);?></td>
							<td><?php echo strtoupper ($donnees['sem']);?></td>
							<td><?php echo strtoupper ($donnees['credi']);?></td>
                        </tr> 
                    </tbody>      
        
        <?php
            
            }
        ?>
                </table>
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
width:650px;
height:250px;
font-size:20px;
}
.profils td{
font-family: Agency FB,Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
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
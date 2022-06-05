<! DOCTYPE html>
<html>
    <head>
    <style> 
 .button { background-color:skyblue; color: black; margin: 6px 0; border: none; padding: 8px 19px;
  cursor: pointer; width: 30%; font-family:cooper std black; border-radius:50px;}
 </style>
                <style>
body{   
border:solid;
border-width:4px;
border-color:skyblue;
border-radius:10px;
padding-top:10px;
background:radial-gradient(skyblue,white);
}   
.col-lg-8{
text-align:center;
}</style>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script>
        function warning_delete(id){
            if(confirm('Voulez-vous vraiment supprimer cet epreuve ?')){
            alert('Suppression effectuée');
            document.location='traitement_suppression.php?id='+id;  
            }
            else{
            alert('Opération annulée');
            }
        }   
        
        </script>
    </head>
<body>
    <center>
<?php include('include/menu.php') ?>
<?php include('include/header.php') ?>
<div class="row">
<div class="col-lg-3"></div>


<div class="col-lg-6">
        <h3>Liste des epreuve</h3>
        <br>
                <table class="table table-condensed" style="background-color:skyblue; border-radius:10px;"> 
                    <thead> 
                        <tr>
                            <th>CODE UE</th> 
                            <th>CREDI</th> 
                            <th>SEMESTRE</th> 
                            <th>ANNE ACCADEMIQUE</th>
                            <th>MODIFICATION</th>
                            <th>SUPPRESSION</th>
                        </tr> 
                    </thead>
        <?php
            include_once('script/connexion_bdd.php');
            $requet = $bdd->query('SELECT * FROM sujets ORDER BY code');
            while($donnees = $requet->fetch())
            { ?>
             
                    <tbody> 
                        <tr> 
                            <td><?php echo  ($donnees['credi']);?></td>
                            <td><?php echo  ($donnees['sem']);?></td>
                            <td><?php echo  ($donnees['anneac']);?></td>
                            <td><a href="profil.php?id=<?php echo $donnees['code']?>"><button class="btn btn-primary btn-md">profil complet</button></a></td>
                            <td><a href="modification.php?id=<?php echo $donnees['code']; ?>"><button class="btn btn-default btn-md">  &nbsp;&nbsp;&nbsp;&nbsp;Modifier&nbsp;&nbsp;&nbsp;&nbsp;</button></a></td>
                            <td> 
                           <a onclick="warning_delete(<?php echo $donnees['code']?>)"><button class="btn btn-danger btn-md">&nbsp;&nbsp;&nbsp;Supprimer&nbsp;&nbsp;</button></a></td>
                        </tr> 
                    </tbody>      
        
        <?php
            
            }
        ?>
        
                </table>
                
                
        <legend><h3>>> Plus d'options</h3></legend> <br>
                <a href="liste_complet.php"><button type="submit" name="submit" class="button">LISTE COMPLETE</button></a>
                
</div>
            <div class="col-lg-1"></div>
            </div>
    </center>
     <br>
     <br>
     <br>
</body>
</html>
<?php
session_start();
    if(isset($_SESSION['auth']) AND $_SESSION['auth']==true)
    {
       header('location:accueil.php'); 
        exit();
    }
?>
<!-- Suite du scritp-->
<?php

if(isset($_POST['submit']))
{
    if(isset($_POST['password']) AND !empty($_POST['password']) AND $_POST['password']=='hamza')
    {
        $_SESSION['auth'] = true ;
        header('location:accueil.php');
        exit();
    }
    else
    {
        $error = '<div class="container"><div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span> Mot de passe incorrect</div></div>' ;
    }
}


?>
<! DOCTYPE html>
<html>
	<head>
		<title>CONNEXION</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
<body>
	</center>
	<?php include('include/header.php') ?>
        <div class="panel panel-info">
                <div class="panel-heading">
            <h2 align="center"><span class="label label-default">VEUILLEZ-VOUS CONNECTER POUR CONTINUER</span></h2></div></div> <br>
				<div class="container">
            <?= isset($error) ? $error : '' ?>
        <br>
        
        <form action="#" method="post">
            
            <input class="form-control input-lg" type="password" name="password" placeholder="Entrez votre mot de passe ici..." /><br> 
           <center> <button class="btn btn-primary btn-lg" type="submit" name="submit"><span class="glyphicon glyphicon-log-in"></span> CONNEXION</button></center>
            
        </form> 
        
<center>
</div>
</body>
</html>
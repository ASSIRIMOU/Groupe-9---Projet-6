<!DOCTYPE HTML>
<html>
<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<meta charset="utf-8">
				<link rel="stylesheet" href="style.css">
				<link href="bootstrap/js/bootstrap.js" rel="JavaScript">
				
				
		<style>		
.footer { 
background:skyblue; 
 }
#section { width:350px; float:left; padding:10px; }
 #footer { background-color:steelblue; color:white; clear:both; text-align:center; padding:5px; } 
 /* Set a style for all buttons */
 .bnv { background-color: #48d1cc; color: white; padding: 14px 20px; margin: 8px 0; border: none;
 cursor: pointer; width: 100%; }
 .cancelbtn { width: auto; padding: 10px 18px; background-color: #4682b4; }
 /* Center the image and position the close button */ 
 .imgcontainer { text-align: center; margin: 24px 0 12px 0; position: relative; } 
 img.avatar { width: 40%; border-radius: 50%; } .container { padding: 16px; } 
 span.psw { float: right; padding-top: 16px; } 
 /* The Modal (background) */ 
 .modal { display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; 
 height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4); padding-top: 60px; }
 .modal-content { background-color: #fefefe; margin: 10% auto 15% auto; border: 1px solid #888; width: 70%; }
 /* The Close Button (x) */ .close 
 { position: absolute; right: 25px; top: 0; color: #000; font-size: 35px; font-weight: bold; } 
 .close:hover, .close:focus { color: red; cursor: pointer; }
 /* Add Zoom Animation */ 
 .animate { -webkit-animation: animatezoom 1s; animation: animatezoom 1s } 
 @-webkit-keyframes animatezoom { from {-webkit-transform: scale(0)} 
 to {-webkit-transform: scale(1)} } 
 @keyframes animatezoom { from {transform: scale(0)} 
 to {transform: scale(1)} }
 /* Change styles for span and cancel button on extra small screens */ 
 @media screen and(max-width: 300px){ span.psw { display: block; float: none; } 
 .cancelbtn { width: 100%; } }				
				
				
				

				
				
	</style>			
	</head>
<body>

<?php include('include/menu.php') ?>


<div class="row">
<div class="col-lg-2" style="background:steelblue;">
           		   
		  
 
 
  <div id="id01" class="modal">
 <form class="modal-content animate" action="#" method="post"> 
 <?= isset($error) ? $error : '' ?>
 <div class="imgcontainer">
 <span onclick="document .getElementById('id01') .style.display='none'"
 class="close" title="Close Modal"> 
 &times;
 </span>
 <img src="log.jpg" alt="AIDE" class="avatar">
 </div> 
 <p align="center">Comment utiliser cette appli? moi  memme je sais pas!!!<br>Demandez à HAMZA MOUSSA peut-etre qu'il a des infos relatives àpropos  </p>
 </form> 
 </div>
 <br>
 <br><br>	   
<div class="row">
<div class="col-lg-1">
<div class="btn-group-vertical">
<a class="btn btn-info btn-md" onclick="document. getElementById('id01') .style.display='block'">PAGE D'AIDE</a><br>
<a class="btn btn-danger btn-md" href="deconnexion.php">DECONNEXION</a><br>
</div>
</div>
</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	</div>

<div class="col-lg-10" style="background:#48d1cc;">
<br><br>
<?php include('include/header.php') ?>
<br><br><br><br><br><br><br><br>
</div>
</div>
<footer class="footer">
               <?php include('include/footer.php') ?>
            </footer>

</body>
</html>
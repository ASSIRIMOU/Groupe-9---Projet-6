<?php
session_start();
if($_POST['nom']!="" & $_POST['sexe']!="") {
include('script/connexion_bdd.php');
$reponse = $bdd-> prepare ("UPDATE sujets SET code=?, faculte=?, dep=?, anneac=?, niveaux=?, sem=?, credi=?, WHERE id=?");
$test=$reponse->execute(array($_POST['code'],$_POST['faculte'],$_POST['dep'],$_POST['anneac'],$_POST['niveaux'],$_POST['sem'],$_POST['credi']));
if ($test==true)
{
session_destroy();
header("location:modifier_sujets.php?msg=ok");
}
else
{
?>
<script>
alert('Ce Nom existe déja');
history.back();
</script>
<?php
}
}
else
{
?>
<script>
alert('Veillez remplir tous les champs obligatoires SVP');
history.back();
</script>
<?php
}
?>
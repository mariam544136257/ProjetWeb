<html>
<head>
<link href="css/liste.css" rel="stylesheet">
<link href="css/formulaire.css" rel="stylesheet">
</head>
<body>
<?php
//connexion
$con=mysqli_connect("localhost","root","","baseformulaire");

//suppression de l'étudiant
$requete="delete from etudiants where NCIN='".$_GET['reference']."'";
mysqli_query($con,$requete);
?>
<div  id="etudiantExistant">
<div id="ecriture" align="center">
<br>l'étudiant au n° C.I.N <b><?php echo($_GET['reference']);?></b>
<br>est bien été supprimé
<br><br><a href="password.php">Retour</a>
</div></div>
</body>
</html>
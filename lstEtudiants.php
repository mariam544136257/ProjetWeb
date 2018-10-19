<html>
    <head>
    <link href="css/liste.css" rel="stylesheet">
    </head>
<body>
<?php
        if ((isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "enetcom") AND isset($_POST['login']) AND $_POST['login'] ==  "mariam") // Si le mot de passe est bon
        {
        // On affiche les codes
        ?>

<?php
//connexion
 $con=mysqli_connect("localhost","root","","baseformulaire");

//Liste des étudiants dont le sexe est Homme
$requete="select * from etudiants  order by lastName,firstName";
$resultat=mysqli_query($con,$requete);
if (mysqli_num_rows($resultat)<>0){

while ($enreg=mysqli_fetch_array($resultat)){
 echo " le num carte d'identité est <Strong>$enreg[NCIN] </Strong>";
echo " le nom de cet étudiant est <Strong> $enreg[lastName]</Strong> ";
 echo " son prénom est <Strong>$enreg[firstName]</Strong> ";
 echo "son age est  <Strong>$enreg[age]</Strong> ";
echo "son mail est le suivant <Strong>$enreg[mail] </Strong> <br> ";

 
?>
<a href="modif_Etudiant.php?reference=
<?php echo $enreg["NCIN"];?>
">Modifier</a>
<a href="suppr_Etudiant.php?reference=
<?php echo $enreg["NCIN"];?>
">Supprimer</a><br>
<hr>
<?php
}
?>


<?php
}else{
?>
<div align="Left">
<b> Pour le moment, il n'y a aucun étudiant enregistré!!!</b>
</div>
<?php
}
?>

 <?php
}
else // Sinon, on affiche un message d'erreur
{?>
    <p>Mot de passe ou login incorrect!!!</p>

<?php
}
?>

</body>
</html>
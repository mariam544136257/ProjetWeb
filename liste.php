<html>

<body>
<div align="Left">
<h3>Liste des étudiants</h3>
<hr width="50%" size="2">
</div>
<?php
//connexion
 
$con=mysqli_connect("localhost","root","","base");

?>
<?php
//Liste des étudiants dont le sexe est Homme
$requete_H="select * from etudiants where SEXE='H' order by NOM,PRENOM";
$resultat_H=mysqli_query($con,$requete_H);
if (mysqli_num_rows($resultat_H)<>0){
?>
<div align="Left">
<br>
<h4>Sexe : <b>Homme</b></h4>
<table border="1" cellpaccing="2" cellpadding="0">
<tr>
<td><b>NCIN</b></td>
<td><b>NOM</b></td>
<td><b>PRENOM</b></td>
<td><b>SEXE</b></td>
<td><b>Modif/Suppr</b></td>
</tr>
<?php
while ($enreg_H=mysqli_fetch_array($resultat_H)){
?>
<tr>
<td><?php echo $enreg_H["NCIN"];?></td>
<td><?php echo $enreg_H["NOM"];?></td>
<td><?php echo $enreg_H["PRENOM"];?></td>
<td><?php echo $enreg_H["SEXE"];?></td>
<td>
<a href="modif_Etudiant.php?reference=
<?php echo $enreg_H["NCIN"];?>
">Modifier</a>
<a href="suppr_Etudiant.php?reference=
<?php echo $enreg_H["NCIN"];?>
">Supprimer</a>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php
}else{
?>
<div align="Left">
<h4>Sexe : <b>Homme</b></h4>
<hr width="50%" size="2">
<b> Pour le moment, il n'y a aucun étudiant enregistré!!!</b>
<hr width="50%" size="2">
</div>
<?php
}
?>
<?php
//Liste des étudiants dont le sexe est Femme
$requete_F="select * from etudiants where SEXE='F' order by NOM,PRENOM";
$resultat_F=mysqli_query($con,$requete_F);
if (mysqli_num_rows($resultat_F)<>0){
?>
<div align="Left">
<br>
<h4>Sexe : <b>Femme</b></h4>
<table border="1" cellpaccing="2" cellpadding="0">
<tr>
<td><b>NCIN</b></td>
<td><b>NOM</b></td>
<td><b>PRENOM</b></td>
<td><b>SEXE</b></td>
<td><b>Modif/Suppr</b></td>
</tr>
<?php
while ($enreg_F=mysqli_fetch_array($resultat_F)){
?>
<tr>
<td><?php echo $enreg_F["NCIN"];?></td>
<td><?php echo $enreg_F["NOM"];?></td>
<td><?php echo $enreg_F["PRENOM"];?></td>
<td><?php echo $enreg_F["SEXE"];?></td>
<td>
<a href="modif_Etudiant.php?reference=
<?php echo $enreg_F["NCIN"];?>
">Modifier</a>
<a href="suppr_Etudiant.php?reference=
<?php echo $enreg_F["NCIN"];?>
">Supprimer</a>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php
}else{
?>
<div align="Left">
<h4>Sexe : <b>Femme</b></h4>
<hr width="50%" size="2">
<b> Pour le moment, il n'a aucune étudiante enregistrée!!!</b>
<hr width="50%" size="2">
</div>
<?php
}
?>
</body>
</html>
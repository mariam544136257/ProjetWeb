<html>
<head>
<link href="css/liste.css" rel="stylesheet">
<link href="css/formulaire.css" rel="stylesheet">
</head>
<body>
<?php
//connexion
$con=mysqli_connect("localhost","root","","baseformulaire");

if (empty($_POST['age']) AND empty($_POST['lastName'])
AND empty($_POST['firstName']) AND empty($_POST['mail']) AND empty($_POST['NCIN']) AND empty($_POST['filière'])) 
{



$requete1="select * from etudiants where NCIN='".$_GET['reference']."'";
$resultat=mysqli_query($con,$requete1);
if ($enreg=mysqli_fetch_array($resultat)){
//Remplissage des renseignements sur l'étudiant en question
?>

<form  method="POST" action="modif_Etudiant.php"   >

<div id="forme">
  <div class="style">
    <h1>
      <strong>Veuillez modifier cet étudiant SVP</strong>
    </h1>
    <br>

  </div>
  
  
  <br />
  <br />

  <label class="form_col" for="lastName">Nom :</label>
  <input name="lastName" id="lastName" type="text" value="<?php echo $enreg['lastName'];?>"/>
  
  <br />
  <br />

  <label class="form_col" for="firstName">Prénom :</label>
  <input name="firstName" id="firstName" type="text" value="<?php echo $enreg['firstName'];?>"/>

  <br />
  <br />

  <label class="form_col" for="age">Âge :</label>
  <input name="age" id="age" type="text" value="<?php echo $enreg['age'];?>" />
 
  <br />
  <br />

  <label class="form_col" for="mail">mail:</label>
  <input name="mail" id="mail" type="email" value="<?php echo $enreg['mail'];?>"/>
  


  <br />
  <br />

  <span class="form_col"></span>
  <input type="hidden" name="NCIN" value="<?php echo $enreg['NCIN'];?>">
  <input type="submit" value="Modifier" />
  <input type="reset" value="Réinitialiser le formulaire" />

</form>
<a href="password.php">Liste des étudiants</a>
<?php
}  }
else{ 
 

        $requete2="Update etudiants set lastName='".$_POST['lastName'].
        "',firstName='".$_POST['firstName'].
        "',age='".$_POST['age']."',mail='".$_POST['mail']."'
        where NCIN='".$_POST['NCIN']."'";
        mysqli_query($con,$requete2);
        ?>
        <div align="center">
    
        <br>Merci, l'étudiant <b></b>
        <br>est bien été enregisré
        <br><br><a href="contact.php">Retour</a>
    </div> 
<?php }?>
    

</body>
</html>

   
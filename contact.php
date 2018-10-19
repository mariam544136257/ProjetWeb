
<html >

<head>

  <meta charset="utf-8">
  <link href="css/formulaire.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<?php

if (!empty($_POST['age']) AND !empty($_POST['lastName'])
AND !empty($_POST['firstName']) AND !empty($_POST['mail']) AND !empty($_POST['NCIN'])) {
//connexion
$con=mysqli_connect("localhost","root","","baseformulaire");

//test d'existance de l'étudiant
$requete1="select * from etudiants where NCIN='".$_POST['NCIN']."'";
$resultat=mysqli_query($con,$requete1);
if ($enreg=mysqli_fetch_array($resultat)){
//l'étudiant est déjà existant
?>
<div  id="etudiantExistant">
<div id="ecriture" align="center">
<br><p>L'étudiant</p> <b><?php echo("<p>".$_POST['lastName']." ".$_POST['firstName']);?></b>
<br><p>est déjà existant!!!</p>
<br><br><a href="contact.php">Retour</a><br>
<a href="password.php">Liste des étudiants</a><br>
</div></div>
<?php
}else {
//insertion du nouveau étudiant
$requete2="insert into etudiants
values('".$_POST['NCIN']."',
'".$_POST['lastName']."','".$_POST['firstName']."','".$_POST['age']."','".$_POST['mail']."','".$_POST['filière']."')";
mysqli_query($con,$requete2);

?>
<div  id="etudiantExistant">
<div id="ecriture" align="center">
<br><p>Merci, l'étudiant</p>
<b><?php echo("<p>".$_POST['lastName']." ".$_POST['firstName']);?></b>
<br><p >est bien été enregisré</p>
<br><br><a href="contact.php">Retour</a>
<a href="password.php">Liste des étudiants</a>
</div></div>
<?php
}//fin du test d'existance
}else{?>
<!--Ici c'est le Formulaire-->
<section  class="formulaire" >
      <div class="container">
      <div class="row">
      <div id="DivFormulaire" class="col-lg-7 col-lg-push-2  col-sm-12">

          
<form name="SaisieEtudiant" method="POST" action="contact.php" class="col-lg-12 col-sm-12" id="myForm" >

              <div id="forme">
                <div class="style">
                  <h1>
                    <strong>Veuillez remplir le formulaire SVP</strong>
                  </h1>
                  <br>

                </div>
                
                
                <br />
                <br />

                <label class="form_col" for="NCIN">num carte d'identité :</label>
                <input name="NCIN" id="NCIN" type="text" />
                
                <br />
                <br />

                <label class="form_col" for="lastName">Nom :</label>
                <input name="lastName" id="lastName" type="text" />
                
                <br />
                <br />

                <label class="form_col" for="firstName">Prénom :</label>
                <input name="firstName" id="firstName" type="text" />

                <br />
                <br />

                <label class="form_col" for="age">Âge :</label>
                <input name="age" id="age" type="text" />
               
                <br />
                <br />

                <label class="form_col" for="mail">mail:</label>
                <input name="mail" id="mail" type="email" />
                
                <br />
                <br />

                <label class="form_col" for="filière">filière :</label>

                <select name="filière" id="filière">
                  
                  <option value="GII">GII</option>
                  <option value="GT">GT</option>
                  <option value="GEC">GEC</option>
                </select>
              

                <br />
                <br />


                <span class="form_col"></span>
                <input type="submit" value="M'inscrire" />
                <input type="reset" value="Réinitialiser le formulaire" /><br>
                <a href="password.php"><Strong class="form_col">liste des étudiants</Strong></a>
              </div>
            </form>
            
        </div>
      </div>
    </div>
    </section>
    

<?php
}
?>
</body>
</html>

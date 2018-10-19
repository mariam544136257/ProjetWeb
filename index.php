<html>


<head>
    <meta charset="utf-8">

    <meta name="description" content="Deutsch club ENET'COM">
    <link rel="icon" href="res/De.png" type="image/jpeg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/style1.css">

    <title> Deutsch - club ENET'COM</title>

</head>

<body>
        

    <!-- bootstrap navbar
      ================================================== -->

    <nav style='margin-bottom: 0px !important; padding-top: 0px!important;' class="navbar navbar-inverse" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Deutsch club</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#apropos">à propos</a>
                    </li>
                    <li>
                        <a href="#event">nos évènnements</a>
                    </li>
                    
                    <li>
                        <a href="contact.php">formulaire</a>
                    </li>
                    

                </ul>

            </div>
        </div>
    </nav>


<!--division  de couverture =====================================================================-->
    <div class="divCouverture">

        <div id="club">Bienvenue à notre club
            <br> Willkommen in unserem Club</div>
        <br>
        <br>
        <div id="bouton">
            <a class="btn btn-primary btn-lg " href="#apropos"> à propos</a>
        </div>
    </div>
    <!-- Collapse de la division à propos
    ================================================== -->
    <div id="apropos">
        <div class="container" id="collapse">
            <div>
                <h1 class="section-heading text-uppercase text-center">à propos</h1>
                <h1 class="section-subheading text-muted text-center">Über uns</h1>
                <br>
                <br>
                <div class="row">
                    <div class=" col-sm-12 col-md-4">
                        <img src="res/présentation.jpg" width="100%" alt="photo1" height="260px">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#content">
                                <center>présentation du club</center>
                            </button>
                            <div class="collapse" id="content">
                                <div class="well">Deutsch club ENET'COM est un club à titre éducatif et culturel. Il permet aux étudiants de
                                    partager des idées et des connaissances dans différents domaines et d'avoir l'esprit
                                    d'initiative et de créativité grâce aux formations et à la participation dans l'organisation
                                    des activités culturelles allemandes . </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4">
                        <img src="res/div2.jpg" width="100%" alt="photo1" height="260px">


                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#cont">
                                <center>Objectifs</center>
                            </button>
                            <div class="collapse" id="cont">
                                <div class="well">
                                    <ul>
                                        <li>Favoriser la communication, les rencontres et les échanges entre les étudiants, innovateurs,
                                            formateurs, encadreurs et entreprise par l’organisation de réunions qui peuvent
                                            prendre différentes formes : conférences, débats, rencontres professionnelles
                                            formelles et informelles, séminaires, salons, expositions, etc..</li>
                                        <li>Profiter de l’expérience des universités et des centres Allemandes dans le domaine
                                            éducatif et leadership.</li>
                                        <li>Fournir une formation de la langue Allemande.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4">
                        <img src="res/activité.jpg" width="100%" alt="photo1" height="260px">


                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" data-toggle="collapse" data-target="#conten">
                                <center>Nos activités</center>
                            </button>
                            <div class="collapse" id="conten">
                                <div class="well">Parmi nos activités l'organisation des visites industrielles , (à DRAXLMAIER, à LEONI..),l'organisation
                                    des réunions et des rencontres professionnelles avec des formateurs ,des encadreurs,
                                    des ingénieurs et des directeurs d'entreprises, l'organisations des évènements à but
                                    culturel....
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--portfolio==============================================================================================-->




    <div class="container" id="event">
        <h2 class="section-heading text-uppercase text-center">Nos évènements</h2>
        <h3 class="section-subheading text-muted text-center">unsere Veranstaltungen</h3>
        <section class="row">
            <div class="col-xs-4 col-sm-3 col-md-3">
                <img src="res/1.jpg" width="100%" height="40%" id="image1" >
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3">
                <img src="res/2.jpg" width="100%" height="40%" id="image2" >
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3">
                <img src="res/3.jpg" width="100%" height="40%" id="image3" >
            </div>
            <div class="col-xs-4 col-sm-3 col-md-3">
                <img src="res/4.jpg" width="100%" height="40%" id="image4" >
            </div>


        </section>


    </div>
    <br>
    <!--Bouton Hide=============================================================================-->
    <div id="btn">
        <button class="btn1">Hide</button>
    </div>
    <!--divisio hide/show==========================================================================-->
    <div id="myDIV" class="select">

        <img id="selectedImage" class="col-sm-12 col-md-3 col-md-push-7" src="res/1.jpg" height="38%">
        <div class="col-sm-12 col-md-7 " id="miseEnPageDivision">

            <p id="ee">0.2 Sprich mit uns- HOTEL PACHA :Cet événement est Basé sur le concept de l’innovation et de la créativité. Une
                journée d’échange, de débats et de tables rondes traitant des sujets d’actualité (La POLLUTION). Dans ce
                cadre et avec la participation de plus que 80 personnes, l’action vise à rapprocher les élèves ingénieurs,
                les employeurs, les élèves, les médecins, les directeurs. C’est une occasion privilégiée pour communiquer
                et échanger des idées avec des élèves ingénieurs, des employeurs, des élèves, des médecins , directeurs...</p>
        </div>
        <br>
        <br>
        <br>
    </div>
    <!-- video
    =================================================================================================== -->

    <video controls  width="600" class="  col-md-12">
        <source src="res/yy.mp4">

    </video>
<!--footer==================================================================================================-->
    <footer id="footer" class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="main-footer">

                        <div class="social">
                            <!-- Add icon library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <a href="https://www.facebook.com/deutschclubenetcom/" class="fa fa-facebook"></a>
                            <a href="https://www.linkedin.com/in/mariam-smaoui-611778169/" class="fa fa-linkedin"></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   

</body>
<script src="js/main.js"></script>

</html>
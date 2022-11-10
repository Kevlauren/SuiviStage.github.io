<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>

</head>
<body>

    <style>
        .jojo{
        
        background-color: #5386ce;        
        }

        .ko{
        background-color: gray;
        height: 70px;
        }

        .sec{
        background-color:#657c9c;
        height: 50px;
        border-left: 2px solid black;
        
        }

        .section-debut{
        color: black;

        }
        .section-debut:hover{
        text-decoration: none;
        color: white;
        }

        .titre-sec{
        text-decoration: underline;
        color: #5386ce;
        text-align: center;
        margin-top: 18px;
        }

        .offre{
        
        margin-left: 460px;
        }

        .bout{
        margin-left: 92px;
        background-color: #657c9c;
        font-weight: bold;
        }

        .op{
        background-color:grey;
        height: 30px;
        border-left: 2px solid black;
        }

        .comp {
        color: black;
        text-align: center;
        cursor: pointer;
        }

        .comp:hover{
        color: white;
        }

        .opp{
        background-color:white;
        height: 30px;
        border-left: 2px solid black;
        border-bottom: 2px solid black;;
        }

        .bo{
        text-align: center;
        font-weight: bold;
        border-radius: 4px;
        height: 25px;
        background-color: #302d2d;
        color: white;
        margin-top: 1px;
        margin-left: 22px;
        }

        .jojos{
        height: 35px;
        margin-top: 20px;
        margin-left: 40px;
        color:#5386ce;
        }


    </style>

<?php include("sections/navbar.php") ?>



    <div class="container-fluid">


        
      
        <div class="row">

            <div class="jojo col-md-12 ">
              <h1 style="margin-left: 50px;">Compte Entreprise</h1>
              <p style="margin-left: 50px; font-weight: bold;">L'entreprise jojo est une entreprise qui fait </p>
            </div>
        </div>

        <div class="row">
            <div class="sec col-md-4 ">
                <h3 style="text-align: Center; margin-top: 5px;"> <a class="section-debut" rel="stylesheet" href="#">Publier Offre </a></h3>
            </div>
            <div class="sec col-md-4 ">
                <h3 style="text-align: Center; margin-top: 5px;"> <a class="section-debut" rel="stylesheet" href="#operation">Operation</a></h3>
            </div>
            <div class="sec col-md-4 ">
                <h3 style="text-align: Center; margin-top: 5px;"> <a class="section-debut" rel="stylesheet" href="#remarque">Remarque</a></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="titre-sec">Publier une Offres de Stage</h2><br>
                <div class="offre col-md-3">
                    <form action="" class="form">
                        <div class="form-group">
                            <label for="poste">Poste :</label>
                            <input type="text" id="post" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="addresse">Addresse :</label>
                            <input type="text" id="addresse" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="duree">Duree :</label>
                            <input type="text" id="duree" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="detail">Detail :</label>
                            <textarea class="form-control" id="detail"></textarea>
                        </div>
                        <button type="submit" class="bout btn btn-default">ENVOYER</button>
                    </form>
                </div>
            </div>
            

        </div><br><br>


       
        <section id="operation">
            <h2 class="titre-sec">Operations</h2><br>
                <div class="row">
                    <div class="op col-md-2">
                        <h4 class="comp">Matricule</h4>
                    </div>
                    <div class="op col-md-2">
                        <h4 class="comp">Nom et Prenoms</h4>
                    </div>
                    <div class="op col-md-1">
                        <h4 class="comp">Poste</h4>
                    </div>
                    <div class="op col-md-3">
                        <h4 class="comp">Consulter Document</h4>
                    </div>
                    <div class="op col-md-2">
                        <h4 class="comp">Convention</h4>
                    </div>
                    <div class="op col-md-2">
                        <h4 class="comp">Mission</h4>
                    </div>
                </div>
            
                <div class="row ">
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-1">
                        
                    </div>
                    <div class="opp col-md-3">
                        <form>
                            <label for="cv" style="font-weight:bold;">CV :</label>
                            <input type="text" id="cv" style="margin-top:4px; width: 70px; height: 18px;">
                            <label for="cv" style="font-weight:bold; "> Lettre :</label>
                            <input type="text" id="cv" style="margin-top:4px; width: 70px; height: 18px;">
                        </form>
                    </div>
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-2">
                        <button type="submit" class="bo " ><a href="formulaire.html" style="text-decoration: none; color:white">  Attribuer</a></button>
                    </div>
                </div>

                <div class="row">
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-1">
                        
                    </div>
                    <div class="opp col-md-3">
                        <form>
                            <label for="cv" style="font-weight:bold;">CV :</label>
                            <input type="text" id="cv" style="margin-top:4px; width: 70px; height: 18px;">
                            <label for="cv" style="font-weight:bold; "> Lettre :</label>
                            <input type="text" id="cv" style="margin-top:4px; width: 70px; height: 18px;">
                        </form>
                    </div>
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-2">
                        <button type="submit" class="bo " ><a href="formulaire.html" style="text-decoration: none; color:white">  Attribuer</a></button>
                    </div>
                </div>

                <div class="row">
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-1">
                        
                    </div>
                    <div class="opp col-md-3">
                        <form>
                            <label for="cv" style="font-weight:bold;">CV :</label>
                            <input type="text" id="cv" style="margin-top:4px; width: 70px; height: 18px;">
                            <label for="cv" style="font-weight:bold; "> Lettre :</label>
                            <input type="text" id="cv" style="margin-top:4px; width: 70px; height: 18px;">
                        </form>
                    </div>
                    <div class="opp col-md-2">
                        
                    </div>
                    <div class="opp col-md-2">
                        <button type="submit" class="bo " ><a href="formulaire.html" style="text-decoration: none; color:white">  Attribuer</a></button>
                    </div>
                </div>
        </section>

        <section id="remarque">

            <h2 class="titre-sec">Ajouter Remarques</h2><br>

            <div class="offre col-md-3">
                <form action="" class="form">
                    <div class="form-group">
                        <label for="matricule">Matricule :</label>
                        <input type="text" id="matricule" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="remarque">Remarque :</label>
                        <textarea class="form-control" id="remarque"></textarea>
                    </div>
                    <button type="submit" class="bout btn btn-default">AJOUTER</button>
                </form>
        </section>
        </div>
    </div>






    <?php include("sections/footer.php") ?>

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script> 
    





   
    
</body>
</html>
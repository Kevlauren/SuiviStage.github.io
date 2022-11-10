<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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
</head>
<body>


<style>
.rt{
    margin-top: 20px;
}
.nh{
    width: 20px;
}
.cont1{
  margin-top: 100px;
}

.bg{
    background-color: green;
    height: 80px;
}

hr{
    color: blue;
    width: 300px;
    height: 3px;
}

.im{
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
.fd{
    
    margin: auto;
}

.ipo{
    background-color: rgb(59, 59, 225);
    color: white;
   
}
.ty{
    font-weight: bold;
}

.vi{
    box-shadow: rgba(117, 116, 116, 0.726) 5px 5px 50px;
    border-radius: 5px;
}

.frt{

   width: 380px;
    font-size: 18px;
 
}

.bn{
    color: rgb(28, 28, 28); 
    font-weight: bold;
}

.gh{
    box-shadow: rgba(117, 116, 116, 0.726) 5px 5px 50px;
    margin-top: 20px;
    margin-bottom: 20px;
}


</style>
<?php include("sections/navbar.php") ?>    



    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container cont1">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
  
                
  
                <div class="card mb-4 vi">
  
                  <div class="card-body">
  
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4  ty">Depot de document</h5>
                      <p style="color: red;" class="text-center small">Veuillez choisir les fichiers demandés !!!</p>
                    </div>
  
                    <form >

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-4 col-form-label">Rapport de stage :</label>
                            <div class="col-sm-8">
                              <input class="form-control" type="file" id="formFile">
                            </div>
                          </div>
                      
  
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-4 col-form-label">Resume de satge :</label>
                            <div class="col-sm-8">
                              <input class="form-control" type="file" id="formFile">
                            </div>
                          </div>
  
                          <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-4 col-form-label">Fiche d'evaluation :</label>
                            <div class="col-sm-8">
                              <input class="form-control" type="file" id="formFile">
                            </div>
                          </div>

                      <div class="col-12">
                        <button class="btn btn-primary w-100  rt" type="submit">Envoyer</button>
                      </div>
                     
                    </form>
  
                  </div>
                </div>
  
               
  
              </div>
            </div>
          </div>
  
        </section>
  
      </div>
    
  

   

  

   </div>
    

   <div class="row">
    <div class="col-md-12 bt"></div>
</div>


<?php include("sections/footer.php") ?>





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
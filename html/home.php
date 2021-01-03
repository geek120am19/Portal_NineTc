<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ninetc</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
<img src="https://ninetc.com/wp-content/uploads/2020/06/logo-slide-1.png" >		
<h2 class="text-center" style="color:white;" >NineTc Forms</h2>
		<p class="text-center">Si vous n'êtes pas autorisé à consulter cette page vous risquer des poursuite judiciaire . <br>

Vous été responsable a toutes information saisie dans la forme si vous faite une erreur vous assumez l l’entier responsabilité .
</p>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
		    <div class="box"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-ug_ohzzNSoPfiEMU-qDKtW-7foIkxjKzkjyJC8-ruwRNFQ/viewform?usp=sf_link"> <i class="fa fa-map-marker icon"></a></i>
                        <h3 class="name"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-ug_ohzzNSoPfiEMU-qDKtW-7foIkxjKzkjyJC8-ruwRNFQ/viewform?usp=sf_link">Position</a></h3>
                       </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name"><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-ug_ohzzNSoPfiEMU-qDKtW-7foIkxjKzkjyJC8-ruwRNFQ/viewform?usp=sf_link">Pointage</a></h3>
                        </div>
		</div>
<div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-file-o icon"></i>
                        <h3 class="name">Pointage</h3>
                        </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-file-o icon"></i>
                        <h3 class="name"><br><a href="https://docs.google.com/forms/d/e/1FAIpQLSc-ug_ohzzNSoPfiEMU-qDKtW-7foIkxjKzkjyJC8-ruwRNFQ/viewform?usp=sf_link">Admin Document</a><br><br></h3>
                        </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon"></i>
                        <h3 class="name"><br>HSE Document<br><br></h3>
                        </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-plane icon"></i>
                        <h3 class="name"><br>Transport<br><br></h3>
                        </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon"></i>
                        <a href="tel:0674343766"><h3 class="name">Contact</h3></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>




</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

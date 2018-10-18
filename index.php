<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <script src="Bjs/jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="navBar/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
</head>
<body>
<?php
include("navBar/navbar.html");
?>    
<!-- logo y descripción -->
<div class="container" id="logo-descripcion" >
    <div class="row justify-content-md-center">
        <div class="col col-lg-5" style="align-items: center;">
        <!-- logo -->
            <img src="imgs/Internas/logo_bivlab.png" alt="logoBIVLAB" id=logo>    
        </div>
        <div class="col col-lg-7">
        <!-- descrip -->
            <div class="card" style="width:100%; height:100%;">
                <div class="card-body">
                    <h5 class="card-title">Biomedical Imaging, Vision and Learning Laboratory</h5>
                    <p class="card-text">BivL2ab is mainly dedicated to solve problems related with visual information, covering from the acquisition and analysis of medical images to the understanding of complex spatio-temporal patterns in the general context of computer vision.  Such problems are tipically highly variant and challenging, being hence, the proposal of learning strategies fundamental to stand out significant behaviors from observed data, and to model prior expert knowledge in robust representations.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=container>
    <div class=row>
        <div class="col col-lg-auto">
            <h4 class="text-left">News</h4>
        </div>
    </div>  
</div>
<!-- News -->
<div class="row justify-content-md-center" style="margin-top:20px;">
    <div class="col col-lg-5" >
        <div class="jumbotron jumbotron-fluid" id=jum-1>
            <div class="row justify-content-md-center">
                <div class="col col-lg-10" >
                    <h1 class="display-4 display-news">Participation at 13th Colombian Conference on Computing (13CCC 2018)</h1>
                    <p class="lead">03 October 2018</p>
                </div>
                <div class="col col-lg-1 col-btn" >
                    <a href="https://uis-macv.github.io/blog/2018/10/03/13ccc2018.html" class="btn btn-primary btn-lg active btn-news" role="button" aria-pressed="true" style="padding-top:40px;">></a>
                </div> 
            </div>
        </div>
    </div>
    <div class="col col-lg-5" >
        <div class="jumbotron jumbotron-fluid" id=jum-1>
            <div class="row justify-content-md-center">
                <div class="col col-lg-10" >
                    <h1 class="display-4 display-news">Participation at IEEE International Symposium on Biomedical Imaging (ISBI 2018)</h1>
                    <p class="lead">07 April 2018</p>
                </div>
                <div class="col col-lg-1 col-btn" >
                    <a href="https://uis-macv.github.io/blog/2018/04/07/isbi2018.html" class="btn btn-primary btn-lg active btn-news" role="button" aria-pressed="true" style="padding-top:40px;">></a>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-md-center" style="margin-top:20px;">
    <div class="col col-lg-5" >
        <div class="jumbotron jumbotron-fluid" id=jum-1>
            <div class="row justify-content-md-center">
                <div class="col col-lg-10" >
                    <h1 class="display-4 display-news">Punto Vive Digital: now open 24h Mon-Fri</h1>
                    <p class="lead">26 October 2017</p>
                </div>
                <div class="col col-lg-1 col-btn" >
                    <a href="https://uis-macv.github.io/blog/2017/10/26/puntovivedigital.html" class="btn btn-primary btn-lg active btn-news" role="button" aria-pressed="true" style="padding-top:40px;">></a>
                </div> 
            </div>
        </div>
    </div>
    <div class="col col-lg-5" >
        <div class="jumbotron jumbotron-fluid" id=jum-1>
            <div class="row justify-content-md-center">
                <div class="col col-lg-10" >
                    <h1 class="display-4 display-news">Successful poster presentations</h1>
                    <p class="lead">25 October 2017</p>
                </div>
                <div class="col col-lg-1 col-btn" >
                    <a href="https://uis-macv.github.io/blog/2017/10/25/eventoudi.html" class="btn btn-primary btn-lg active btn-news" role="button" aria-pressed="true" style="padding-top:40px;">></a>
                </div> 
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<?php
include("navBar/footer.html");
?>
<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
<script>$('#example').tooltip(options)</script>
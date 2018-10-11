<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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


<!-- News -->
<style>
.row{
    margin-bottom:20px;
}
.jumbotron{
    height:100%;
    padding-bottom:0;
}
.display-news{
    font-size:30px;
}
.btn-news{
    width:auto;
    height:100%;
    margin-right:10px;
}
.col-btn{
        height:115px;
}
</style>
<div class="row justify-content-md-center" style="margin-top:20px;">
    <div class="col col-lg-5" >
        <div class="jumbotron jumbotron-fluid" id=jum-1>
            <div class="row justify-content-md-center">
                <div class="col col-lg-10" >
                    <h1 class="display-4 display-news">Presence in the CCC: Colombian Conference on Computing</h1>
                    <p class="lead">Wilson and Jefferson</p>
                </div>
                <div class="col col-lg-1 col-btn" >
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-news"><strong> > </strong></button>
                </div> 
            </div>
        </div>
    </div>
    <div class="col col-lg-5" >
        <div class="jumbotron jumbotron-fluid" id=jum-1>
            <div class="row justify-content-md-center">
                <div class="col col-lg-10" >
                    <h1 class="display-4 display-news">Presence in poland</h1>
                    <p class="lead">Jefferson was there</p>
                </div>
                <div class="col col-lg-1 col-btn" >
                    <button type="button" class="btn btn-primary btn-lg btn-block btn-news"><strong> > </strong></button>
                </div> 
            </div>
        </div>
    </div>
</div>



<!-- footer -->
<?php
include("navBar/footer.html");
?>
</body>
</html>
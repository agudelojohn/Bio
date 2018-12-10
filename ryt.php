<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R&T</title>
    
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
// Esto muestra una navbar dependiendo del acceso que se tenga
if(isset($_SESSION['acceso']))
{
    if($_SESSION['acceso']=='yes')
    {
        include("navBar/navbar-acces.html");
    }else{
        include("navBar/navbar.html");
    }
}else{
    include("navBar/navbar.html");
} 
?>    
<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
            <div class="col col-lg-10" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">R&T</a></li>
                    </ol>
                </nav>
            </div>
</div>

<!-- logo and descrption -->
<div class="container" id="logo-descripcion" >
    <div class="row justify-content-md-center">
        <div class="col col-lg-auto" style="align-items: center;">
        <!-- logo -->
            <img src="imgs/Internas/bivlab.png" alt="logoBIVLAB" id=logo>    
        </div>
        <div class="col col-lg-9">
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
<!-- lines of research -->
<style>
    .card-header{
    }
    .card-header:hover{
        background-color:#20AE29;
    }
    .card-header:hover .btn-link{
        color:white !important;
    }
</style>
<div class="row justify-content-md-center ">
    <div class="col col-lg-10" style="margin-top:20px; margin-bottom:-30px;">
       <h4 class="text-left">Lines of research</h4>
    </div>
</div>
<br>
<div class="container">
        <div id="accordion">
                <div class="card">
                  <div class="card-header text-center" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Imaging and Inverse Problems
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Image Formation Models</li>
                            <li>Image Reconstruction</li>
                            <li>Biomedical Image Processing</li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header text-center" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Motion Understanding
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <ul>
                          <li>MU1: Motion Magnification</li>
                          <li>MU2: Gait Analysis</li>
                          <li>MU3: Tracking and Temporal Segmentation</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header text-center" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Learning and Image representation
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <ul>
                          <li>LIR-1: Learning models</li>
                          <li>LIR-2: Image Data Analytics</li>
                          <li>LIR-3: Fusion Models</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!-- <div class="row justify-content-md-center ">
    <div class="col col-lg-10">
        <ul class="list-group" id=lista-de-lineas>
            <li class="list-group-item">Imaging and Inverse Problems</li>
            <li class="list-group-item">Motion Understanding</li>
            <li class="list-group-item">Learning and Image representation</li>
        </ul>
    </div>
</div> -->

<!-- semilleros -->
<div class="row justify-content-md-center ">
    <div class="col col-lg-10" style="margin-top:20px; ">
       <h4 class="text-left">Formation Groups</h4>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center ">
        <div class="col col-lg-6">
            <div class="card card-seed" style="width:100%;">
                <div class="card-body">
                    <h5 class="card-title">MACV</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Motion Analysis and Computer Vision</h6>
                    <p class="card-text">Escuela de Ingeniería de Sistemas e Informática. at the Universidad Industrial de Santander</p>
                    <a href="https://uis-macv.github.io/" class="card-link ">More</a>
                </div>
            </div>
        </div>
        <div class="col col-lg-6">
            <div class="card card-seed" style="width:100%;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("navBar/footer.html");
?>
</div>


<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>

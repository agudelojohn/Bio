<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People</title>
    
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


<!-- carousel -->
<div class="row justify-content-md-center">
    <div class="col col-lg-12" id=contenedorSlide>
      <!-- corusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="imgs/Internas/grupo1.png" alt="Imagen del grupo 1">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="imgs/Internas/grupo2.png" alt="Imagen del grupo 2">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- until here -->

<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
            <div class="col col-lg-11" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">People</a></li>
                    </ol>
                </nav>
            </div>
</div>

<!-- perfiles e información de la gente -->
<div class=container>
    <div class="row justify-content-md-center ">
        <div class="col col-lg-2">
        <!-- aqui va la imagen -->
            <img class="img-profile " src="imgs/Profiles/gustavo.jpg" alt="">
        </div>
        <div class="col col-lg-9">
        <!-- ahora 3 divisiones para la información -->
            <div class="row name_profile">
                <!-- Nombre -->
                <strong><h3>Gustavo Garzón</h3></strong>
            </div>
            <div class="row p-c-d">
                <!-- profesion, cargo, departamento o estudios-->
                Ms(c) Systems Engineering <br>B.Sc, Systems Engineering<br>Tech. Web Development
            </div>
            <div class="row d-info">
                <!-- demás informacion -->
                <div class="col col-lg-auto text-left" style="padding-left:0;">
                    <ul style=" list-style-type: none;" id="titles">
                    <strong>
                        <li>Email</li>
                        <li>Email</li>
                    </strong>
                    </ul>
                </div>
                <div class="col col-lg-auto">
                    <ul style=" list-style-type: none; margin-left:-40px;">
                        <li>gustavo.garzon@saber.uis.edu.co</li>
                        <li>gustavogarzonuis@gmail.com</li>
                        <li><!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-gustavo">
                            Launch demo modal
                            </button>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class=container>
    <div class="row justify-content-md-center ">
        <div class="col col-lg-2">
        <!-- aqui va la imagen -->
            <img class="img-profile " src="imgs/Profiles/jefferson.jpeg" alt="">
        </div>
        <div class="col col-lg-9">
        <!-- ahora 3 divisiones para la información -->
            <div class="row name_profile">
                <!-- Nombre -->
                <strong><h3>Jefferson Rodríguez</h3></strong>
            </div>
            <div class="row p-c-d">
                <!-- profesion, cargo, departamento o estudios-->
                Ms(c) Systems Engineering<br>B.Sc, Systems Engineering
            </div>
            <div class="row d-info">
                <!-- demás informacion -->
                <div class="col col-lg-auto text-left" style="padding-left:0;">
                    <ul style=" list-style-type: none;" id="titles">
                    <strong>
                        <li>Email</li>
                        <li>Email</li>
                    </strong>
                    </ul>
                </div>
                <div class="col col-lg-auto">
                    <ul style=" list-style-type: none; margin-left:-40px;">
                        <li>contact.me@jeffersonrodriguez.co</li>
                        <li>jefferson.rodriguez2@saber.uis.edu.co</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=container>
    <div class="row justify-content-md-center ">
        <div class="col col-lg-2">
        <!-- aqui va la imagen -->
            <img class="img-profile " src="imgs/Profiles/isail.jpg" alt="">
        </div>
        <div class="col col-lg-9">
        <!-- ahora 3 divisiones para la información -->
            <div class="row name_profile">
                <!-- Nombre -->
                <strong><h3>Isail Salazar</h3></strong>
            </div>
            <div class="row p-c-d">
                <!-- profesion, cargo, departamento o estudios-->
                Ms(c) Systems Engineering<br>B.Sc, Systems Engineering
            </div>
            <div class="row d-info">
                <!-- demás informacion -->
                <div class="col col-lg-auto text-left" style="padding-left:0;">
                    <ul style=" list-style-type: none;" id="titles">
                    <strong>
                        <li>Email</li>
                        <li>Email</li>
                    </strong>
                    </ul>
                </div>
                <div class="col col-lg-auto">
                    <ul style=" list-style-type: none; margin-left:-40px;">
                        <li>isail.salazar@saber.uis.edu.co</li>
                        <li>isail1995@hotmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- // ------------------------------------>
<!-- MODALS -->
<!-- ------------------------------------ -->


<!-- Modal -->
<div class="modal fade" id="modal-gustavo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">GUSTAVO GARZÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col col-lg-4">
                <img class="img-profile " src="imgs/Profiles/gustavo.jpg" alt="">
            </div>
            <div class="col col-lg-8">
                <ul>
                    <li>
                        <strong>Education</strong> <br>
                        Ms(c) Systems Engineering B.Sc <br>
                        Systems Engineering Tech. <br>
                        Web Development 
                    </li>
                    <li>
                        <strong>Contact Info</strong><br>
                        gustavo.garzon@saber.uis.edu.co <br>
                        gustavogarzonuis@gmail.com
                    </li>
                </ul>              
            </div>
        </div>
        <div class="row justify-content-center" >
            <div class="col col-lg-10">
                <p class="text-center">Gustavo Garzón is currently a candidate for Master in Systems Engineering and Informatics at Universidad Industrial de Santander (Colombia). His research interests include: action recognition, pattern recognition, computer vision, motion analysis, image processing and machine learning. He works at BIVLab as Research Assistant and helps with student advising on computer vision related areas.</p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
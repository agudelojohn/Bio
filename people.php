<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People</title>
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
            <img class="img-profile " src="imgs/Profiles/p1.jpeg" alt="">
        </div>
        <div class="col col-lg-9">
        <!-- ahora 3 divisiones para la información -->
            <div class="row name_profile">
                <!-- Nombre -->
                <strong><h3>Fei-Fei Li, Ph.D.</h3></strong>
            </div>
            <div class="row p-c-d">
                <!-- profesion, cargo, departamento -->
                Professor <br>Director, Stanford AI Lab<br>Computer Science Departmen
            </div>
            <div class="row d-info">
                <!-- demás informacion -->
                <div class="col col-lg-auto text-left" style="padding-left:0;">
                    <ul style=" list-style-type: none;" id="titles">
                    <strong>
                        <li>Office</li>
                        <li>Phone</li>
                        <li>Email</li>
                        <li>Twitter</li>
                        <li>Address</li>
                    </strong>
                    </ul>
                </div>
                <div class="col col-lg-auto">
                    <ul style=" list-style-type: none; margin-left:-40px;">
                        <li>Room 246 Gates Bldg</li>
                        <li>(650) 725-3860</li>
                        <li>feifeili [at] cs [dot] stanford [dot] edu</li>
                        <li>@drfeifei</li>
                        <li>353 Serra Mall, Gates Building, Stanford, CA, 94305-9020</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("navBar/footer.html");
?>    
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R&T</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="navBar/navBar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
<?php
include("navBar/navbar.html");
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
                    <h5 class="card-title">Grupo de investigación y extensión GIV2LAB</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- lines of research -->
<style>
    .list-group-item{
        text-align:center;
        padding:10px;
    }
</style>

<div class="container" style="margin-top:20px;">
<ul class="list-group">
  <li class="list-group-item">Imaging and Inverse Problems</li>
  <li class="list-group-item">Motion Understanding</li>
  <li class="list-group-item">Learning and Image representation</li>
</ul>
</div>
</div>


<?php
include("navBar/footer.html");
?>
</div>

<script src="Bjs/bootstrap.js"></script>
<script src="Bjs/bootstrap.min.js"></script>
<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>

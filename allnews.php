<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de la app</title>

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
            <div class="col col-lg-11" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">News</a></li>
                    </ol>
                </nav>
            </div>
</div>
<?php
// desde aquí la conexión a la BD
require("php/conexion.php");
// sentencia
$sql="Select*from news order by date_new;";
// query para mandar la sentencia
$resultado = mysqli_query($conexion,$sql);
// toma los datos en un array
while($array=mysqli_fetch_array($resultado)){
    // antes del echo dividiré los arrays en sus respectivos strings
    $title=$array['title'];
    $date=$array['date_new'];
    $content=$array['content'];
    $img=$array['img_news'];

echo '
        <!-- Previo a las noticias -->
        <div class=container>
            <div class="row justify-content-md-center ">
                <div class="col col-lg-12 " align=center>
                <!-- aqui va la imagen -->
                    <img class="img_new" src="'.$img.'" alt="" style="height:100%; border-radius:15px; border:3px solid grey;">
                </div>
            </div>
            <div class="row justify-content-md-center ">
            <div class="col col-lg-1" >
            </div>
                <div class="col col-lg-9" >
                    <h5>'.$date.'</h5><h1>'.$title.'</h1>
                </div>
                <div class="col col-lg-2" style="margin:auto;" align=center>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-'.$date.'">
                    Complete data
                    </button>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-info" style="margin-bottom:20px;"></div>
        <!-- // ------------------------------------>
        <!-- MODALS -->
        <!-- ------------------------------------ -->
        
        
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="modal-'.$date.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">'.$title.'</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col col-lg-12">
                        <h5>'.$date.'</h5>
                        <p>'.$content.'</p>            
                    </div>
                    <div class="col col-lg-12">
                        <img class="img-profile " src="'.$img.'" alt="">
                    </div>
                    
                </div>
                
                </div>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
';
}
// echo '<br><br>';
?>



<?php
include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
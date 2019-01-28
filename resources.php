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
    <script>
    function over(x){
        x.src="imgs/Internas/icon2.png";
    }

    function leave(x){
        x.src="imgs/Internas/icon.png";
    }
    function bigImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";
    }

    function normalImg(x) {
    x.style.height = "42px";
    x.style.width = "42px";
    }
    

    </script>
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


// desde aquí la conexión a la BD
require("php/conexion.php");
// sentencia
$sql="Select*from datasets order by nombre_dataset;";
// query para mandar la sentencia
$resultado = mysqli_query($conexion,$sql);
// toma los datos en un array
echo '<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
<div class="col col-lg-10" > 
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="">Datasets</a></li>
        </ol>
    </nav>
</div>
</div>';

while($array=mysqli_fetch_array($resultado)){
    echo ' 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <p>'.$array['nombre_dataset'].'</p>
            </div>
            <div class="col-6">
                <a href="'.$array['location_dataset'].'" download><img id=imagen onmouseover="over(this)" onmouseout="leave(this)" src="imgs/Interna/icon.png" height="42" width="42"></a>
            </div>
        </div>
    </div>';
}
?>

<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
<div class="col col-lg-10" > 
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="">Codes</a></li>
        </ol>
    </nav>
</div>
</div>
<?php
// sentencia
$sql="Select*from codes order by nombre_code;";
// query para mandar la sentencia
$resultado = mysqli_query($conexion,$sql);
// toma los datos en un array

while($array=mysqli_fetch_array($resultado)){
    echo ' 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <p>'.$array['nombre_code'].'</p>
            </div>
            <div class="col-6">
                <a href="'.$array['url_code'].'" target="_blank"><img id=imagen onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="imgs/Internas/external.png" style="height:42px; width:42px;"></a>
            </div>
        </div>
    </div>';
}


include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
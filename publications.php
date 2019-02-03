<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publications</title>
  
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
<div class="container">
    <ul id=lista-de-publicaciones>

<?PHP
// desde aquí la conexión a la BD
require("php/conexion.php");
// sentencia
$sql="Select*from publications order by title;";
// query para mandar la sentencia
$resultado = mysqli_query($conexion,$sql);
// toma los datos en un array
while($array=mysqli_fetch_array($resultado)){
    // primero saco la fecha como la necesitamos
    
echo    '
        <div class="card border-left-0" style="margin-top:20px;">
            <div class="card-body row pre-publications" >
                <div class="col col-lg-8">
                    <h5 class="card-title" style="margin-top:10px;">'.$array['title'].' </h5>
                    <ul style="margin-top:-15px;">';
$sql2='SELECT name from author join publications JOIN people_profiles where people_profiles.id_profile=author.id_people and publications.id_publication=author.id_publication';
$resultado2 = mysqli_query($conexion,$sql2);
while($array2=mysqli_fetch_array($resultado2)){
    echo '<li>'.$array2['name'].'</li>';
}

                    
echo'
                    </ul>
                    <p class="card-text">'.$array['abstract'].'</p>
                </div>
                <div class="col col-lg-2">
                    <br><img src="'.$array['img_publication'].'" style="width:100%">
                </div>
                <div class="col col-lg-2">
                    <!--<h5>'.substr($array['date_publication'], 0, 4).'</h5>-->
                    <br><h5>'.$array['date_publication'].'</h5>
                </div>
                <div class="col col-lg-12">
                <br>
                    <a href="'.$array['pdf_publication'].'" class="card-link" download>PDF</a>
                    <a href="'.$array['codigo'].'" class="card-link">Código</a>
                    <a href="'.$array['url'].'" class="card-link">URL</a>
                </div>
            </div>
        </div>
        </li>
';
}
?>
        

</div>




<?php
include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
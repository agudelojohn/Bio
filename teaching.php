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
                <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Teaching</a></li>
            </ol>
        </nav>
    </div>
</div>
<?PHP

// desde aquí la conexión a la BD
require("php/conexion.php");
// sentencia
$sql="select nombre_clase, name, horario, edificio, aula from people_profiles join dictar_clase join clases on dictar_clase.id_profesor=people_profiles.id_profile and clases.id_clase=dictar_clase.id_clase order by id_profile;";
// query para mandar la sentencia
$resultado = mysqli_query($conexion,$sql);
// toma los datos en un array
$titulo="vacío";
while($array=mysqli_fetch_array($resultado)){
    if($titulo!=$array['nombre_clase'])
        {
            $titulo=$array['nombre_clase'];
            echo '
            <div class="container">
                <div class="row ">
                    <div class="col col-lg-auto" > 
                        <h2>'.$titulo.'</h2>
                    </div>
                </div>
            </div>';
        }
    echo '
        <div class="container">
            <div class="row justify-content-md-start">
                <div class="col col-lg-3" ></div>
                <div class="col col-lg-3" > 
                    <strong><p>'.$array['name'].'</p></strong>
                </div>
                <div class="col col-lg-3" > 
                    <p>'.$array['horario'].'</p>
                </div>
                <div class="col col-lg-3" > 
                    <p>'.$array['edificio'].' - '.$array['aula'].'</p>
                </div>
            </div>
        </div>';
}
?>


<?php
include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
<?PHP
session_start();
$comilla="'";
if(isset($_GET['eliminacionCorrecta']))
{
    echo'<script type="text/javascript">
    alert("Deleted rightly");
    window.location.href="people.php";
    </script>';
}
if(isset($_GET['erroralEliminar']))
{
    echo'<script type="text/javascript">
    alert("Error deleting, couldn'.$comilla.'t be completed");
    window.location.href="people.php";
    </script>';
}
?>
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
    <script>
        function alertar()
        {
            return confirm("Are you sure to delete this profile?");
        }
    </script>
 <style>
 @media (min-width: 576px) {

 .modal-dialog {
    max-width: 700px !important;
}

}
input, textarea{
    width:100%;
    height:100% !important;
}
 </style>
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
<?PHP

// desde aquí la conexión a la BD
require("php/conexion.php");
// sentencia
$sql="Select*from people_profiles order by name;";
// query para mandar la sentencia
$resultado = mysqli_query($conexion,$sql);
// toma los datos en un array
while($array=mysqli_fetch_array($resultado)){
    // antes del echo dividiré los arrays en sus respectivos strings
    $education  = $array['education'];
    $pieces = explode(";", $education);
    $contact= $array['contact'];
    $contact_pieces=explode(";", $contact);

echo '
        <!-- perfiles e información de la gente -->
        <div class=container>
            <div class="row justify-content-md-center ">
                <div class="col col-lg-2">
                <!-- aqui va la imagen -->
                    <img class="img-profile " src="'.$array['img_profile'].'" alt="">
                </div>
                <div class="col col-lg-9">
                <!-- ahora 3 divisiones para la información -->
                    <div class="row name_profile">
                        <!-- Nombre -->
                        <strong><h3>'.$array['name'].'</h3></strong>
                    </div>';
//                     <div class="row p-c-d">
//                         <!-- profesion, cargo, departamento o estudios-->
//                         ';
// // Ms(c) Systems Engineering <br>B.Sc, Systems Engineering<br>Tech. Web Development
// // hasta aquí el primer echo para poder colocar un for que muestre la lista de educación
// for($i=0;$i<count($pieces);$i++)
// {
//     echo $pieces[$i].'<br>';
// }


// echo'
//                     <br>
                    // </div>
echo'                   <div class="row d-info">
                        <!-- demás informacion -->
                        <div class="col col-lg-auto text-left" style="padding-left:0;">
                            <ul style=" list-style-type: none;" id="titles">
                            <strong><li>Email and Number</li>
                            </strong>
                            </ul>
                        </div>
                        
                        <div class="col col-lg-auto">
                            <ul style=" list-style-type: none; margin-left:-40px;">';
                            for($i=0;$i<count($contact_pieces);$i++)
                            {
                                echo '<li>'.$contact_pieces[$i].'</li>';
                            }            
echo'
                                
                                <li style="margin-top:10px;"><!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-'.$array['id_profile'].'">
                                    Complete profile
                                    </button>';
if(isset($_SESSION['acceso']))
{
    if($_SESSION['acceso']=='yes')
    {
        echo '<button type="button" class="btn btn-warning" style="margin-left:20px;"data-toggle="modal" data-target="#modal-'.$array['id_profile'].'-modify">
        Modify
        </button>';
        echo "<form method='post' action='php/metodos/eliminar_perfil.php' onsubmit='return alertar();'>
            <input type=text value=".$array['id_profile']." name=idprofile id=idprofile style='display:none;'>
            <input type='submit' value='Delete' class='btn btn-danger' style='margin-top:10px;'>
            </form>";
    }                
}

echo '
                                </li>
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
        <div class="modal fade" id="modal-'.$array['id_profile'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">'.$array['name'].'</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col col-lg-4">
                        <img class="img-profile " src="'.$array['img_profile'].'" alt="">
                    </div>
                    <div class="col col-lg-8">
                        <ul>
                            <li>
                                <strong>Education</strong> <br>';
// hasta aquí el primer echo para poder colocar un while que muestre la lista de educación
for($i = 0; $i <count($pieces); $i++)
{
        echo $pieces[$i].'<br>';
};
echo '
                            </li>
                            <li>
                                <strong>Contact Info</strong><br>';
for($i = 0; $i <count($contact_pieces); $i++){
        echo $contact_pieces[$i].'<br>';
};
echo '
                            </li>
                        </ul>              
                    </div>
                </div>
                <div class="row justify-content-center" >
                    <div class="col col-lg-10">
                        <p class="text-center">'.$array['resum'].'</p>
                    </div>
                </div>
 <!--espacio para colocar el resultado de las publicaciones, segunda consulta-->
                <div class="row justify-content-center" >
                <div class="col col-lg-10">
                    <h3>Publications</h3>
                    <ul>';
$sql_dos="SELECT title, abstract FROM people_profiles JOIN author JOIN publications on people_profiles.id_profile=author.id_people and author.id_publication=publications.id_publication where people_profiles.id_profile='$array[id_profile]'";
// query para mandar la sentencia
$resultado2 = mysqli_query($conexion,$sql_dos);
// toma los datos en un array
    while($array_dos=mysqli_fetch_array($resultado2)){
    echo'           <li>    
                        <p class="text-left"><strong>'.$array_dos['title'].'</strong><br>'.$array_dos['abstract'].'</p>
                    </li>
    ';
    }
echo '  
                    </ul>
                </div>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!--finish modal-->


        <!-- Modal MODIFY-->
        <div class="modal fade" id="modal-'.$array['id_profile'].'-modify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modify</h5>
                </div>
              <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col col-lg-4">
                        <img class="img-profile " src="'.$array['img_profile'].'" alt="">
                    </div>
                    <div class="col col-lg-8">
                        <form method="post" action="php/metodos/modificar_perfil.php" enctype="multipart/form-data">
                            <input type=text value="'.$array['id_profile'].'" disabled><br>
                            Name:<br>
                            <input type=text value="'.$array['name'].'"><br>
                            Profile'.$comilla.'s image:<br>
                            <input type=text value="'.$array['img_profile'].'"><br>
                            Education:<br>
                            <input type=text value="'.$array['education'].'"><br>
                            Contact:<br>
                            <input type=text value="'.$array['contact'].'"><br>
                            Resum:<br>
                            <textarea>'.$array['resum'].'</textarea><br>
                            Publications:<br>
                            <textarea disabled>';
                            $sql_dos="SELECT title FROM people_profiles JOIN author JOIN publications on people_profiles.id_profile=author.id_people and author.id_publication=publications.id_publication where people_profiles.id_profile='$array[id_profile]'";
                            // query para mandar la sentencia
                            $resultado2 = mysqli_query($conexion,$sql_dos);
                            // toma los datos en un array
                                while($array_dos=mysqli_fetch_array($resultado2)){
                                echo $array_dos['title'];
                                }
                            echo'</textarea><br>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-primary" value="Reset" style="margin-left:20px;">Reset</button>
                        </form>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!--finish modal-->
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
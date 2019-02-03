<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding profiles</title>

    <script src="Bjs/jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="navBar/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 <script>
function img_label(){
// sección que saca el nombre del pdf solamente
    var fullPath = document.getElementById('img_profile').value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
    //replace the "Choose a file" label
    document.getElementById('img_label').innerHTML = filename;
}
 </script>
</head>
<body>
<?php
if (isset($_GET["correcto"])=='si')
{
    echo'<script type="text/javascript">
    alert("Saved correctly");
    </script>';
}
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
    header("Location: index.php");
    exit;
} 
?>    
<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
            <div class="col col-lg-11" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Add Profile</a></li>
                    </ol>
                </nav>
            </div>
</div>
<div class=container>
<!-- <form method="post" action="php/metodos.php" enctype="multipart/form-data" onsubmit="return validarRegistro()" >
            <!--Titulo para saber quien envía la información 
            <input type="text" name="titulo" value="guardarServicio" style="display:none;"> -->
    <form method="post" action="php/metodos/agregar_perfil.php" enctype="multipart/form-data">
    <!-- Titulo para saber quien envía la información  -->
        <!-- <input type="text" name="titulo" value="agregar_perfil" style="display:none;"> -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameProfile" placeholder="Enter name" maxlength=50>
            <small id="nameProfile" class="form-text text-muted">This will show up on each profile</small>
        </div>
        <label >Image</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="img_profile" name="img_profile" onchange="img_label()">
            <label class="custom-file-label" for="img_profile" id="img_label">Choose image profile</label>
        </div>
        <div class="form-group">
            <label for="education">Education</label>
            <input type="text" class="form-control" id="education" name=education aria-describedby="educationProfile" placeholder="Enter education info"  maxlength=200 onclick="alert('Remember to separate each new item with semicolon (;)')">
            <small id="educationProfile" class="form-text text-muted">Please separe each new item with semicolon (;)</small>
        </div>
        <div class="form-group">
            <label for="emails">Contact</label>
            <input type="text" class="form-control" id="emails" name=emails aria-describedby="contactProfile" placeholder="Enter contact info"  maxlength=200 onclick="alert('Remember to separate each new item with semicolon (;)')">
            <small id="contactProfile" class="form-text text-muted">Please separate each new item with semicolon (;)</small>
        </div>
        <div class="form-group">
            <label for="resume">Resume</label>
            <textarea class="form-control" id="resume" name=resume rows="3" placeholder="Please enter details about the person"  maxlength=800></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary" value="Reset" style="margin-left:20px;">Reset</button>
    </form>
    <br>
</div>
<?php
include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
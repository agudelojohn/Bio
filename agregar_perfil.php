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
include("navBar/navbar.html");
?>    
<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
            <div class="col col-lg-11" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Add profile</a></li>
                    </ol>
                </nav>
            </div>
</div>
<div class=container>
<!-- <form method="post" action="php/metodos.php" enctype="multipart/form-data" onsubmit="return validarRegistro()" >
            <!--Titulo para saber quien envía la información 
            <input type="text" name="titulo" value="guardarServicio" style="display:none;"> -->
    <form method="post" action="php/metodos.php" enctype="multipart/form-data">
    <!-- Titulo para saber quien envía la información  -->
    <input type="text" name="titulo" value="agregar_perfil" style="display:none;">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameProfile" placeholder="Enter name" maxlength=50>
        <small id="nameProfile" class="form-text text-muted">This will show up on each profile</small>
    </div>
    <label >Image</label>
    <div class="custom-file" style="margin-bottom:30px;">        
        <input type="file" class="custom-file-input" id="img_profile" name="img_profile">
        <label class="custom-file-label" for="img_profile">Choose image profile</label>
    </div>
    <div class="form-group">
        <label for="education">Education</label>
        <input type="text" class="form-control" id="education" aria-describedby="educationProfile" placeholder="Enter education info"  maxlength=200>
        <small id="educationProfile" class="form-text text-muted">Please separe each new line with semicolon (;)</small>
    </div>
    <div class="form-group">
        <label for="emails">Contact</label>
        <input type="text" class="form-control" id="emails" aria-describedby="contactProfile" placeholder="Enter contact info"  maxlength=200>
        <small id="contactProfile" class="form-text text-muted">Please separe each new line with semicolon (;)</small>
    </div>
    <div class="form-group">
        <label for="resume">Resume</label>
        <textarea class="form-control" id="resume" rows="3" placeholder="Please enter details about the person"  maxlength=600></textarea>
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
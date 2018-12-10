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
    header("Location: index.php");
    exit;
} 
?>    
<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
            <div class="col col-lg-11" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Add Publication</a></li>
                    </ol>
                </nav>
            </div>
</div>
<div class=container>
    <form method="post" action="php/metodos/agregar_publicacion.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name=title id="tile" aria-describedby="titleNew" placeholder="Enter title" maxlength=100>
            <small id="titleNew" class="form-text text-muted">Main title of each new</small>
        </div>
        <label >PDF</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="pdf_pub" name="pdf_pub">
            <label class="custom-file-label" for="pdf_pub">Choose PDF for download</label>
        </div>
        <label >Image</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="img_profile" name="img_pub">
            <label class="custom-file-label" for="img_pub">Choose image to show</label>
        </div>
        <div class="form-group">
            <label for="abstract">Abstract</label>
            <textarea class="form-control" name=abstract id="abstract" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" name=code id="code" aria-describedby="titleNew" placeholder="Enter title" maxlength=100>
            <small id="titleNew" class="form-text text-muted">Link to download this code</small>
        </div>
        <div class="form-group">
            <label for="url_pub">URL</label>
            <input type="text" class="form-control" name=url_pub id="url_pub" aria-describedby="titleNew" placeholder="Enter title" maxlength=100>
            <small id="urlPub" class="form-text text-muted">URL to get more information</small>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" name=date id="date" aria-describedby="dateNew" placeholder="Event date"> 
            <!-- si sirve el formato de fecha predetermiado -->
            <small id="dateNew" class="form-text text-muted">Date of creation</small>
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
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
 function new_label(){
// sección que saca el nombre del pdf solamente
    var fullPath = document.getElementById('img_new').value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
    //replace the "Choose a file" label
    document.getElementById('new_label').innerHTML = filename;
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
    header("Location: index.php");
    exit;
} 
?>    
<div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
            <div class="col col-lg-11" > 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Manage news</a></li>
                    </ol>
                </nav>
            </div>
</div>
<div class=container>
    <form method="post" action="php/metodos/agregar_noticia.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name=title id="title" aria-describedby="titleNew" placeholder="Enter title" maxlength=99>
        <small id="titleNew" class="form-text text-muted">Main title of each new</small>
    </div>
    <label >Image</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="img_new" name="img_new" onchange="new_label()">
            <label class="custom-file-label" for="img_new" id="new_label">Choose image profile</label>
        </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name=date id="date" aria-describedby="dateNew" placeholder="Event date"> 
        <!-- si sirve el formato de fecha predetermiado -->
        <small id="dateNew" class="form-text text-muted">Date that will be show up</small>
    </div>
    <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name=content rows="3" placeholder="Please enter details about this new"  maxlength=1000></textarea>
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
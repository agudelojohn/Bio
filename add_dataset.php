<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding dataset</title>

    <script src="Bjs/jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="navBar/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script>
function dataset_label(){
// sección que saca el nombre 
    var fullPath = document.getElementById('name_dataset').value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
    //replace the "Choose a file" label
    document.getElementById('dataset_label').innerHTML = filename;
}
function img_label(){
// sección que saca el nombre del pdf solamente
    var fullPath = document.getElementById('img_dataset').value;
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
?>
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
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Add Dataset</a></li>
                    </ol>
                </nav>
            </div>
</div>
<div class=container>
    <form method="post" action="php/metodos/agregar_dataset.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title or Name</label>
            <input type="text" class="form-control" name=name id="name" aria-describedby="titleNew" placeholder="Enter title" maxlength=100>
            <small id="titleNew" class="form-text text-muted">Main title of each dataset</small>
        </div>
        <label >Dataset</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="name_dataset" name="name_dataset" onchange="dataset_label()" maxlegth=100>
            <label class="custom-file-label" for="dataset" id="dataset_label">Select Dataset to upload</label>
        </div>
        <label >Image</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="img_dataset" name="img_dataset" onchange="img_label()" maxlegth=50>
            <label class="custom-file-label" for="img_dataset" id="img_label">Choose image to show</label>
        </div>
        <div class="form-group">
            <label for="resume">Description</label>
            <textarea class="form-control" id="description_dataset" name="description_dataset" rows="3" placeholder="Please enter details about dataset"  maxlength=500></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary" value="Reset" style="margin-left:20px;">Reset</button>
    </form>
    <br>
</div>

<script>
function abrir_modal(){
    alert("Hola");
}
</script>

<?php
include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
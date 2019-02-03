<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding code</title>

    <script src="Bjs/jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="Bcss/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="navBar/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="js/validaciones.js"></script>
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
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Add Code</a></li>
                    </ol>
                </nav>
            </div>
</div>
<div class=container>

    <form method="post" action="php/metodos/agregar_code.php" enctype="multipart/form-data" onsubmit="return validar_code();">
        <div class="form-group">
            <label for="title">Title or Name</label>
            <input type="text" class="form-control" name=name_code id="name_code" aria-describedby="titleNew" placeholder="Enter title" maxlength=100 >
            <small id="titleNew" class="form-text text-muted">Main title of each code</small>
        </div>
        <div class="form-group">
            <label for="title">URL</label>
            <input type="text" class="form-control" name=url_code id="url_code" aria-describedby="titleNew" placeholder="Enter url" maxlength=100 >
            <small id="titleNew" class="form-text text-muted">Link to code</small>
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
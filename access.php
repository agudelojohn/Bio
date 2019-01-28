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
        header("Location: php/cerrarSesion.php");
        exit;
        // include("navBar/navbar.html");
    }
}else{
    include("navBar/navbar.html");
}
?>
        <div class="row justify-content-md-center" style="margin-top:20px;"> <!-- row to keep know where are you -->
                    <div class="col col-lg-11" > 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Log In</a></li>
                            </ol>
                        </nav>
                    </div>
        </div>
<?PHP   
if(isset($_SESSION['acceso'])) {
    echo '
    <div class="row justify-content-md-center">
        <div class="col col-lg-6">
            <a class="btn btn-primary" href="php/cerrarSesion.php" role="button" style="width:100%; background-color:#C60A08;">Cerrar Sesión</a>
        </div>
    </div>';
}else{
    echo '

        <div class="row justify-content-md-center">
            <form method="post" action="php/iniciarSesion.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameProfile" placeholder="Enter name" maxlength=50>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" aria-describedby="passwordProfile" placeholder="Enter name" maxlength=50>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary" value="Reset" style="margin-left:20px;">Reset</button>
            </form>
        </div>';
}

include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
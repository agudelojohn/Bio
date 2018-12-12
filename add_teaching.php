<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Teaching</title>

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
        header("Location: index.php");
        exit;
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
                        <li class="breadcrumb-item active" aria-current="page"><a href="ryt.php">Add teaching information</a></li>
                    </ol>
                </nav>
            </div>
</div> 
<div class=container>
    <form method="post" action="php/metodos/agregar_teaching.php">
    <div class="form-group">
            <label for="teacher">Teacher</label><br>
            <!-- select para incluir un autor en las publicaciones, se genera apartir de la busqueda en la BD -->
            <select name="teacher" id="teacher">
                <?php 
                include("php/conexion.php");
                $sql = mysqli_query($conexion, "select name, id_profile FROM people_profiles");
                while ($row = $sql->fetch_assoc()){
                echo "<option value=".$row['id_profile'].">" . $row['name'] . "</option>";
                }
                ?>
            </select>
            <small id="titleNew" class="form-text text-muted">In charge of class</small>
    </div>
    <div class="form-group">
            <label for="class">Class</label><br>
            <!-- select para incluir un autor en las publicaciones, se genera apartir de la busqueda en la BD -->
            <select name="class" id="class">
                <?php 
                include("php/conexion.php");
                $sql = mysqli_query($conexion, "select nombre_clase, id_clase FROM clases");
                while ($row = $sql->fetch_assoc()){
                echo "<option value=".$row['id_clase'].">" . $row['nombre_clase'] . "</option>";
                }
                ?>
            </select>
            <small id="titleNew" class="form-text text-muted">Name of class</small>
    </div>
    <div class="form-group">
        <label for="schedule">Schedule</label>
        <input type="text" class="form-control" name=schedule id="schedule" aria-describedby="titleNew" placeholder="Enter title" maxlength=100>
        <!-- <small id="titleNew" class="form-text text-muted">Main title of each new</small> -->
    </div>
    <div class="form-group">
            <label for="location">Location</label><br>
            <select name="location" id="location">
                <?php 
                include("php/conexion.php");
                $sql = mysqli_query($conexion, "select nombre, id_edificios FROM edificios");
                while ($row = $sql->fetch_assoc()){
                echo "<option value=".$row['nombre'].">" . $row['nombre'] . "</option>";
                }
                ?>
            </select>
            <small id="titleNew" class="form-text text-muted">Location where it's dictated</small>
    </div> 
    <div class="form-group">
            <label for="classroom">Classroom</label>
            <input type="text" class="form-control" name=classroom id="classroom" aria-describedby="titleNew" placeholder="Enter classroom number" maxlength=4>
            <small id="titleNew" class="form-text text-muted">Classroom</small>
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
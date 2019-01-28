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
<!-- parte necesaria para crear los dropdown de los autores -->
<?php 
                include("php/conexion.php");
                $sql = mysqli_query($conexion, "select name, id_profile FROM people_profiles");
                while ($row = $sql->fetch_assoc()){
                    $_NOMBRES[]=$row['name'];
                    // array_push($_NOMBRES[],$row['name']);
                    $_IDS[]=$row['id_profile'];
                }
?>
<script>


function dateGenerate() {
   var date = new Date(), dateArray = new Array(), i;
   curYear = date.getFullYear();
    for(i = 0; i<5; i++) {
        dateArray[i] = curYear+i;
    }
    return dateArray;
}

function addSelect(divname) {
   var contador=document.getElementById("authors_counter").value;
   var arraynames = <?php echo json_encode($_NOMBRES); ?>;
   var arrayids=<?php echo json_encode($_IDS); ?>;
   var newDiv=document.createElement('div');
   var html = '<select style="margin-top:10px;" name="author-'+contador+'">', dates = dateGenerate(), i;
   for(i = 0; i < arraynames.length; i++) {
       html += "<option value='"+arrayids[i]+"'>"+arraynames[i]+"</option>";
   }
   html += '</select>';
   newDiv.innerHTML= html;
   document.getElementById(divname).appendChild(newDiv);
   document.getElementById("authors_counter").value = Number(document.getElementById("authors_counter").value) + 1;
}

// para que muestre el nombre en los inputs

function pdf_label(){
// sección que saca el nombre del pdf solamente
    var fullPath = document.getElementById('pdf_pub').value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
        }
    //replace the "Choose a file" label
    document.getElementById('pdf_label').innerHTML = filename;
}
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
<!-- hasta aquí lo delos autores -->
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
        <div class="form-group">
            <label for="author">Author</label><br>
            <!-- select para incluir un autor en las publicaciones, se genera apartir de la busqueda en la BD -->
            <div name=author>
                <input type="text" id="authors_counter" name="authors_counter" value=0 style="display:none;">
                <div id="select-container">
                </div>
                <button type=button class="btn btn-success" id="add" onclick="addSelect('select-container');" style="margin-top:10px;">Add Author</button>
            </div>
            <small id="titleNew" class="form-text text-muted">Author of this publication</small>
        </div>
        <label >PDF</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="pdf_pub" name="pdf_pub" onchange="pdf_label()">
            <label class="custom-file-label" for="pdf_pub" id="pdf_label">Choose PDF for download</label>
        </div>
        <label >Image</label>
        <div class="custom-file" style="margin-bottom:30px;">        
            <input type="file" class="custom-file-input" id="img_profile" name="img_pub" onchange="img_label()">
            <label class="custom-file-label" for="img_profile" id="img_label">Choose image to show</label>
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
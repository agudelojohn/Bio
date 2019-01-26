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
    include("navBar/navbar.html");
} 
?>    
<?php 
                include("php/conexion.php");
                $sql = mysqli_query($conexion, "select name, id_profile FROM people_profiles");
                while ($row = $sql->fetch_assoc()){
                    $_NOMBRES[]=$row['name'];
                    // array_push($_NOMBRES[],$row['name']);
                    $_IDS[]=$row['id_profile'];
                }
                print_r(array_values($_NOMBRES));
                echo '<br>';
                print_r(array_values($_IDS));
                echo '<br>';
                print($_NOMBRES[0]);
                echo '<br>';
                print($_NOMBRES[1]);
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
   var arraynames = <?php echo json_encode($_NOMBRES); ?>;
   var arrayids=<?php echo json_encode($_IDS); ?>;
   var newDiv=document.createElement('div');
   var html = '<select>', dates = dateGenerate(), i;
   for(i = 0; i < arraynames.length; i++) {
       html += "<option value='"+arrayids[i]+"'>"+arraynames[i]+"</option>";
   }
   html += '</select>';
   newDiv.innerHTML= html;
   document.getElementById(divname).appendChild(newDiv);
}
</script>

<form action="otro.php">
<div id="select-container">
</div>
<button type=button id="add" onclick="addSelect('select-container');">Add Dropdown</button>
</form>


<?php
include("navBar/footer.html");
?>    
</div>

<script src="Bjs/bootstrap.min.js"></script>
</body>
</html>
<?php
include("../conexion.php");
extract($_POST);

$dir="../../datasets/";
$nombre_archivo=$_FILES['dataset']['name'];

if(!move_uploaded_file($_FILES['dataset']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir el archivo<br>";
    echo "<a href='../../add_dataset.php'>Volver</a>";
    exit;
}
$location="datasets/".$nombre_archivo; //directorio que se guardará en la BD

$sql="insert into datasets(nombre_dataset, location_dataset) values('".$_POST['name']."','".$location."')";
// echo $sql;
$ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
    }


?>
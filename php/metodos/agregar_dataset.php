<?php
include("../conexion.php");
extract($_POST);

$dir="../../datasets/";
$nombre_archivo=$_FILES['dataset']['name'];

if(!move_uploaded_file($_FILES['dataset']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir el archivo dataset<br>";
    echo "<a href='../../add_dataset.php'>Volver</a>";
    exit;
}
$location="datasets/".$nombre_archivo; //directorio que se guardará en la BD

$nombre_archivo=$_FILES['img_dataset']['name'];

if(!move_uploaded_file($_FILES['img_dataset']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir la imagen<br>";
    echo "<a href='../../add_dataset.php'>Volver</a>";
    exit;
}
$img_location="imgs/datasets/".$nombre_archivo; //directorio que se guardará en la BD

echo $img_location;
echo $location;



// $sql="insert into datasets(nombre_dataset, location_dataset, description_dataset, image_dataset) values('".$_POST['name_dataset']."','".$location."','".$_POST['description_dataset']."','".$img_location."')";
// // echo $sql;
// $ejecutar=mysqli_query($conexion,$sql);
//     if($ejecutar!=0){
//     header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
//     }else
//     {
//         header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
//     }


?>
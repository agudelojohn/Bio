<?php
include("../conexion.php");
extract($_POST);

if($_FILES['img_pub']['size']>10000000){
    echo "Solo se permiten archivos menores a 10MB<br>";
    echo "<a href='agregar_publicacion.php'>Volver</a>";
    exit;
}

$dir="../../imgs/publications/";
$nombre_archivo=$_FILES['img_pub']['name'];

if(!move_uploaded_file($_FILES['img_pub']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir el archivo<br>";
    echo "<a href='../../add-publicacion.php'>Volver</a>";
    exit;
}
$image="imgs/publications/".$nombre_archivo; //directorio que se guardará en la BD

$dir="../../pdfs/";
$nombre_archivo=$_FILES['pdf_pub']['name'];

if(!move_uploaded_file($_FILES['pdf_pub']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir el archivo<br>";
    echo "<a href='../../add-publicacion.php'>Volver</a>";
    exit;
}
$pdf="pdfs/".$nombre_archivo; //directorio que se guardará en la BD

$title=$_POST["title"];
// $pdf
// $image
$abstract=$_POST["abstract"];
$code=$_POST["code"];
$url=$_POST["url_pub"];
$date=$_POST["date"];
$sql="insert into publications(title, pdf_publication, img_publication, abstract, codigo, url, date_publication)
    values('".$title."','".$pdf."','".$image."','".$abstract."','".$code."','".$url."','".$date."')";
    $ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
    }

?>
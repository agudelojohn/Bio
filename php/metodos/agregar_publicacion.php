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
    echo "Error al subir la imagen<br>";
    echo "<a href='../../add-publication.php'>Volver</a>";
    exit;
}
$image="imgs/publications/".$nombre_archivo; //directorio que se guardará en la BD

$dir="../../pdfs/";
$nombre_archivo=$_FILES['pdf_pub']['name'];

if(!move_uploaded_file($_FILES['pdf_pub']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir el PDF<br>";
    echo "<a href='../../add-publication.php'>Volver</a>";
    exit;
}
$pdf="pdfs/".$nombre_archivo; //directorio que se guardará en la BD

$title=$_POST["title"];
$abstract=$_POST["abstract"];
$code=$_POST["code"];
$url=$_POST["url_pub"];
$date=$_POST["date"];
$sql="insert into publications(title, pdf_publication, img_publication, abstract, codigo, url, date_publication)
    values('".$title."','".$pdf."','".$image."','".$abstract."','".$code."','".$url."','".$date."')";
$ejecutar=mysqli_query($conexion,$sql);





$sql2="select id_publication from publications where title='".$title."';";

$resultado = mysqli_query($conexion, $sql2);
$id_pub = $resultado->fetch_assoc(); //resultado de buscar la ID de la publicación
$contador = $_POST['authors_counter'];
for($i=0;$i<$contador;$i++)
{
    $sql="insert into author(id_publication, id_people) values(".$id_pub['id_publication'].",".$_POST['author-'.$i].");";
    $resultado = mysqli_query($conexion, $sql);
    if($resultado==0){
        header("Location:".$_SERVER['HTTP_REFERER']."?errorAlGuardarAutores");
    }
}
if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?DatosGuardados");
}
else{
    header("Location:".$_SERVER['HTTP_REFERER']."?ErroralGuardar");
}


   
?>
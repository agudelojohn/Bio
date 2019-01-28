<?PHP
include("../conexion.php");
extract($_POST);
$dir="../../imgs/news/";
$nombre_archivo=$_FILES['img_new']['name'];

if(!move_uploaded_file($_FILES['img_new']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir el archivo<br>";
    echo "<a href='../../agregar_perfil.php'>Volver</a>";
    exit;
}
$dir="imgs/news/".$nombre_archivo; //directorio que se guardará en la BD


$title=$_POST["title"];
$date=$_POST["date"];

$sql="update news set counter=0 where counter=4";
$ejecutar=mysqli_query($conexion,$sql);

$sql="update news set counter=4 where counter=3";
$ejecutar=mysqli_query($conexion,$sql);

$sql="update news set counter=3 where counter=2";
$ejecutar=mysqli_query($conexion,$sql);

$sql="update news set counter=2 where counter=1";
$ejecutar=mysqli_query($conexion,$sql);


$sql="insert into news(counter, title, date_new, content,img_news) values(1,'".$title."','".$date."','".$content."','".$dir."')";
$ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
    }
?>
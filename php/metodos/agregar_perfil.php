<?PHP
include("../conexion.php");
extract($_POST);

if($_FILES['img_profile']['size']>10000000){
    echo "Solo se permiten archivos menores a 10MB<br>";
    echo "<a href='agregar_perfil.php'>Volver</a>";
    exit;
}

$dir="../../imgs/profiles/";
$nombre_archivo=$_FILES['img_profile']['name'];

if(!move_uploaded_file($_FILES['img_profile']['tmp_name'],$dir.$nombre_archivo)){ //pregunta si NO se movió el archivo
    echo "Error al subir la imagen<br>";
    echo "<a href='../../agregar_perfil.php'>Volver</a>";
    exit;
}
$dir="imgs/profiles/".$nombre_archivo; //directorio que se guardará en la BD

$name=$_POST['name'];
$education=$_POST['education'];
$emails=$_POST['emails'];
$resume=$_POST['resume'];

// para guardar el lugar real de la imagen y su nombre para la BD se guarda la dirección
$sql='insert into people_profiles(name, education, contact, img_profile, resum)
    values("'.$name.'","'.$education.'","'.$emails.'","'.$dir.'","'.$resume.'")';
echo $sql;
    $ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
    }

?>
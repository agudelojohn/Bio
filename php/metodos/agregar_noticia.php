<?PHP
include("../conexion.php");
extract($_POST);

$title=$_POST["title"];
$date=$_POST["date"];
$url=$_POST["url"];

$sql="update news set counter=0 where counter=4";
$ejecutar=mysqli_query($conexion,$sql);

$sql="update news set counter=4 where counter=3";
$ejecutar=mysqli_query($conexion,$sql);

$sql="update news set counter=3 where counter=2";
$ejecutar=mysqli_query($conexion,$sql);

$sql="update news set counter=2 where counter=1";
$ejecutar=mysqli_query($conexion,$sql);


$sql="insert into news(counter, title, date_new, url) values(1,'".$title."','".$date."','".$url."')";
$ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
    }
?>
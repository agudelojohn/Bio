<?PHP
include("../conexion.php");
extract($_POST);

$sql="insert into dictar_clase(id_profesor, id_clase, horario, edificio, aula) 
    values(".$teacher.",".$class.",'".$schedule."','".$location."','".$classroom."');";
$ejecutar=mysqli_query($conexion,$sql);

if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
}else
{
    header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
}
?>
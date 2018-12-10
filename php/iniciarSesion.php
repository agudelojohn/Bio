<?PHP
session_start();
extract($_POST);
include("conexion.php");
$sql="select count(*) from acceso where id='".$name."' and pass='".$pass."'";
// echo $sql;
        // $conexion=conectar();
$ejecutar=mysqli_query($conexion,$sql);
$array= mysqli_fetch_array($ejecutar);
// echo $array['count(*)'];
if( $array['count(*)']==1)
{
    // echo $array['count(*)'];
    $_SESSION['acceso']='yes';
    $_SESSION['error']='no';
}
else{
    // echo $array['count(*)'];
    $_SESSION['acceso']='no';
    $_SESSION['error']='yes';
}
// para volver a la ubicación de la que proviene
header("Location:".$_SERVER['HTTP_REFERER'] );
exit;
?>

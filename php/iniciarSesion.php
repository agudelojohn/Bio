<?PHP
session_start();
extract($_POST);
include("conexion.php");
$sql="select count(*) from usuario where usuario='".$usuario."' and contrasena='".$clave."'";
        // $conexion=conectar();
$ejecutar=mysqli_query($conexion,$sql);
$array= mysqli_fetch_array($ejecutar);
// echo $array['count(*)'];
if( $array['count(*)']==1)
{
    $_SESSION['acceso']=yes;
    $_SESSION['error']=no;
    $_SESSION['usuario']=$usuario;
}
else{
    $_SESSION['acceso']=no;
    $_SESSION['error']=yes;
}
// para volver a la ubicación de la que proviene
header("Location:".$_SERVER['HTTP_REFERER'] );
?>

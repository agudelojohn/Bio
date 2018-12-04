<?PHP
session_start();
extract($_POST);
include("conexion.php");
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql2="select count(*) from acceso where id='".$name."' and pass='".$pass."'";

$resultado2 = mysqli_query($conexion,$sql2);
$cantidad= mysqli_fetch_assoc($resultado2); 

    if( $cantidad['count(*)']==1)
    {
        $_SESSION['acceso']=yes;
        $_SESSION['error']=no;
    }
    else{
        $_SESSION['acceso']=no;
        $_SESSION['error']=yes;
    }

// para volver a la ubicación de la que proviene
header("Location: ../../access.php");
?>

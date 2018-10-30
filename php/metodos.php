<?PHP
include("conexion.php");
extract($_POST);


if($titulo=="agregar_perfil"){    
    
    $nombre = $_FILES['img_profile']['name'];
    $nombrer = strtolower($nombre);
    $cd=$_FILES['img_profile']['tmp_name'];
    $ruta = "imgs/profiles/" . $_FILES['img_profile']['name'];
    $destino = "imgs/profiles/".$nombrer;
    $resultado = @move_uploaded_file($_FILES["img_profile"]["tmp_name"], $ruta);
    header("Location:".$_SERVER['HTTP_REFERER']);
    
}

if($titulo=="modificar"){
     $sql="update registros set descripcion='".$descripcion."', costo=".$costo." where nombre='".$nombre."';"; 
        // $conexion=conectar();
    $ejecutar=mysqli_query($conexion,$sql);
    // echo $sql;
    if($ejecutar!=0){
        header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
        }else
        {
            header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");
        }
}
if($titulo=="guardarUsuario"){
    $sql="update usuario set usuario='".$usuarioTxt."', contrasena='".$claveTxt."' where id='2'"; 
    $ejecutar=mysqli_query($conexion,$sql);
    // echo $sql;
    if($ejecutar!=0){
        header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
        }else
        {
            header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");
        }
}
if($titulo=="borrar")
{   
    $path1="../".$img;
    $path2="../".$pdf;
    unlink($path1);
    unlink($path2);
    $sql="delete from registros where nombre='".$nombre."'"; 
    $ejecutar=mysqli_query($conexion,$sql);
    // header("Location:".$_SERVER['HTTP_REFERER']."/.../".$path1);
    if($ejecutar!=0){
        header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
        }else
        {
            header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");
        }
}

// <!--Para retornar a la pagina anterior  -->
// include("return.php");
// if($ejecutar!=0){
//     header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
//     }else
//     {
//         header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");
//     }
?>
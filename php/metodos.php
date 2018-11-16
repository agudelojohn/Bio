<?PHP
include("conexion.php");
extract($_POST);


if($titulo=="agregar_perfil"){    
    $sql="select count(*) FROM `people_profiles` WHERE name='".$name."';";
    $ejecutar=mysqli_query($conexion,$sql);
    // $count = mysqli_fetch_array($ejecutar);
    $array=mysqli_fetch_array($ejecutar);
    if($array['count(*)']!=0){
        header("Location: ../agregar_perfil.php?errorNombre=si");
    }
    
    // metodo copy, primero pide la fuente de los datos el metodo es el que hace la magia
    // $_Files es la variable global para manejar archivos
    //tmp_name es una ubiacción donde se guarda temporalmente el archivo en la computadora, es como en ram 
    // despues de la coma es la dirección de destino
    // // ]en la variable $nombre se guarda el nombre del archivo que trae
    // ´para guardar en una dirección externa primero se especifica la ruta en una variable
    // opendir abre la dirección que se acaba de almacenar para poder guardar en ella
    // 
    // PARA LAS IMAGENES
    $carpeta="../imagenes/servicios/";
    opendir($carpeta);
    // Valida si el archivo ya existe, en este caso valida con el nombre
    $target_file=$carpeta.basename($_FILES['foto']['name']);
    if (file_exists($target_file)) {
        header("Location: ../registros.php?errorImg=si");
    }else{
        // $destino; es la que tiene la dirección fisica del archivo, con su nombre
        $destino= $carpeta.$_FILES['foto']['name']; 
        // $destino tendrá el nombre de la imagen y su carpeta de destino
        copy($_FILES['foto']['tmp_name'], $destino);
    }
    $destino= $carpeta.$_FILES['foto']['name']; 

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
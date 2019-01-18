<?php
include("../conexion.php");
extract($_POST);

$sql="insert into codes(nombre_code, url_code) values('".$_POST['name_code']."','".$_POST['url_code']."')";
// echo $sql;
$ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");;
    }


?>
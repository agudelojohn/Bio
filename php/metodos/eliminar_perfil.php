<?php
include("../conexion.php");
extract($_POST);

$sql="delete from people_profiles where id_profile=".$_POST['idprofile']."";


$ejecutar=mysqli_query($conexion,$sql);
    if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?eliminacionCorrecta");
    }else
    {
        header("Location:".$_SERVER['HTTP_REFERER']."?erroralEliminar");
    }
?>
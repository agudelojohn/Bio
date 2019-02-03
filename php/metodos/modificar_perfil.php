<?php
include("../conexion.php");
extract($_POST);

$sql='update people_profiles set name="'.$_POST['name_profile'].'", img_profile="'.$_POST['img_profile'].'", education="'.$_POST['education_profile'].'", contact="'.$_POST['contact_profile'].'", resum="'.$_POST['resum_profile'].'" where id_profile='.$_POST['id_profile'].';';
$ejecutar=mysqli_query($conexion,$sql);
echo $sql;
if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?DatosModificados");
}
else{
    header("Location:".$_SERVER['HTTP_REFERER']."?ErroralMOdificar");
}
?>
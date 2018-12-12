<?PHP
include("../conexion.php");
extract($_POST);
$schedule=" ";
$dias_semana=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
foreach($dias_semana as $dia)
{
 switch ($dia)   {
     case 'Monday':
        if(($Monday_start!='none')&&($Monday_end!='none')){
            $schedule=$schedule.$dia.": ".$Monday_start."-".$Monday_end." ";
        }
        break;
    case 'Tuesday':
        if(($Tuesday_start!='none')&&($Tuesday_end!='none')){
            $schedule=$schedule.$dia.": ".$Tuesday_start."-".$Tuesday_end." ";
        }
        break;
    case 'Wednesday':
        if(($Wednesday_start!='none')&&($Wednesday_end!='none')){
            $schedule=$schedule.$dia.": ".$Wednesday_start."-".$Wednesday_end." ";
        }
        break;
    case 'Thursday':
        if(($Thursday_start!='none')&&($Thursday_end!='none')){
            $schedule=$schedule.$dia.": ".$Thursday_start."-".$Thursday_end." ";
        }
        break;
    case 'Friday':
        if(($Friday_start!='none')&&($Friday_end!='none')){
            $schedule=$schedule.$dia.": ".$Friday_start."-".$Friday_end." ";
        }
        break;
    case 'Saturday':
        if(($Saturday_start!='none')&&($Saturday_end!='none')){
            $schedule=$schedule.$dia.": ".$Saturday_start."-".$Saturday_end." ";
        }
        break;
    }        
 }
// echo $schedule;
$sql="insert into dictar_clase(id_profesor, id_clase, horario, edificio, aula) 
    values(".$teacher.",".$class.",'".$schedule."','".$location."','".$classroom."');";
$ejecutar=mysqli_query($conexion,$sql);

if($ejecutar!=0){
    header("Location:".$_SERVER['HTTP_REFERER']."?correcto=si");
}else
{
    header("Location:".$_SERVER['HTTP_REFERER']."?errorCarga");
}

?>
<?PHP
include("conexion.php");
extract($_POST);

$nombre_fichero = "../imagenes/servicios/".$img;

            if (file_exists($nombre_fichero)) {
                echo "El fichero $nombre_fichero existe";
            } else {
                echo "El fichero $nombre_fichero no existe";
            }
?>
<?PHP
// mysql_connect("conexion", "usuario", "contraseña");
$conexion = mysqli_connect("localhost", "Jagudelo", "Johnagudelo4124");
// usando la conexion seleccionamos la BD
mysqli_select_db($conexion, "bivlab")or die("Problemas al conectar la bd");;
// // sentencia
// $sql="Select*from registros;";
// // query para mandar la sentencia
// $resultado = mysqli_query($conexion,$sql);
// // toma los datos en un array
// $array=mysqli_fetch_array($resultado);
// echo $array["nombre"]." ".$array["costo"]." ".$array["descripcion"];
// echo "<img src=".$array["imagen"].">";
?>
<?php
require("../conexion.php");
    $id = $_GET['id'];
    $x= 2;
    $sqli = mysqli_query($conexion, "UPDATE empleados SET status ='$x' WHERE id_empleado = $id");


   
    header("location: agregar_empleado.php");
	    
        
?>
<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $id = $_GET['id'];
        $query = mysqli_query($conexion, "SELECT foto  FROM empleados  WHERE id_empleado = $id");  
    $query_delete = mysqli_query($conexion, "DELETE FROM empleados WHERE id_empleado = $id");
    $data = mysqli_fetch_assoc($query);
    
        $filename = $data['foto'];

    if (file_exists($filename)) {
        $success = unlink($filename);
    
    }
    mysqli_close($conexion);
   
    
    header("location: agregar_empleados.php");
}
?>
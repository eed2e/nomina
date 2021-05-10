<?php
if (empty($_POST['id'] ) || empty($_POST['nombre'] )|| empty($_POST['ap'] )|| empty($_POST['am'] )|| empty($_POST['sm'] )|| empty($_POST['fecha'] ) || empty($_POST['dep'] )) {
    

}else{
    require("../conexion.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $sm = $_POST['sm'];
    $sd = $_POST['sd'];
    $fecha = $_POST['fecha'];
    $dep = $_POST['dep'];
    $status = 1;

   
    
	    $sql = mysqli_query($conexion, "INSERT INTO empleados (id_empleado, nombre, apellido_paterno, apellido_materno, fecha_ingreso, sueldo_mensual, sueldo_diario, departamento, frecuencia_pago, status) 
        VALUES ('$id','$nombre','$ap','$am','$fecha','$sm','$sd','$dep','$fp','$status')");

        
            

	    
	
	    
	    
    	    
	    mysqli_close($conexion);

	header("location: agregar_empleado.php");
}
?>

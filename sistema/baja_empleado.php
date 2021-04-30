<?php
require("../conexion.php");
    $id = $_GET['id'];
    $x= 2;
    $sqli = mysqli_query($conexion, "UPDATE empleados SET status ='$x' WHERE id_empleado = $id");


   
    header("location: agregar_empleado.php");
	    
        
?>
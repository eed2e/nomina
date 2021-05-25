<?php
    require("../conexion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM vacaciones WHERE id_empleado = $id");
   
    mysqli_close($conexion);
   
    
    header("location: vacaciones.php");

?>
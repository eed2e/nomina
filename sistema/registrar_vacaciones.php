<?php

    require("../conexion.php");
    $id = $_POST['empleado_v'];
    $iv = $_POST['fecha_i'];
    $fv = $_POST['fecha_f'];


    $sqli = mysqli_query($conexion, "SELECT * FROM empleados WHERE id_empleado = '$id'");
    $no = mysqli_fetch_assoc($sqli); 
    
    $nombre = $no["nombre"];
    $apellido_p = $no["apellido_paterno"];;
    $apellido_m = $no["apellido_materno"];;
   

            $query_insert = mysqli_query($conexion, "INSERT INTO vacaciones(id_empleado, nombre, apellido_paterno, apellido_materno, inicio_v, fin_v) VALUES ('$id', '$nombre','$apellido_p','$apellido_m', '$iv','$fv')");
            var_dump ($query_insert);

    mysqli_close($conexion);
   header("location: vacaciones.php");

?>
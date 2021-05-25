<?php
if (empty($_POST['id_editar'] ) || empty($_POST['nombre_editar'] )|| empty($_POST['ap_editar'] )|| empty($_POST['am_editar'] )|| empty($_POST['sm_editar'] )|| empty($_POST['fecha_editar'] ) || empty($_POST['dep_editar'] )) {
    

}else{
    require("../conexion.php");
    
    $tips = 'jpg';
        $type = array ('image1/jpg' => 'jpg');
        $id = $_POST['id_editar'];
        $id = preg_replace('([^A-Za-z0-9])', '', $id);
        
        
        $nombrefoto1 = $_FILES['image1']['name'];
        $ruta1 = $_FILES['image1']['tmp_name'];
        $name = $id.'A.'.$tips;
        if(is_uploaded_file($ruta1)){
            $destino = "imagenes_nomina/".$name;
            copy($ruta1,$destino);
        }
        
        if($destino ==NULL){
            $id = $_POST['id_editar']; 
    $nombre = $_POST['nombre_editar'];
    $ap = $_POST['ap_editar'];
    $am = $_POST['am_editar'];
    $sm = $_POST['sm_editar'];
    $sd = $_POST['sm_editar']/30.4;
    $fecha = $_POST['fecha_editar'];
    $dep = $_POST['dep_editar'];
    $fp = $_POST['fp_editar'];
    $status = 1;


    
	    $sql = mysqli_query($conexion, "UPDATE empleados SET id_empleado = '$id', nombre = '$nombre', apellido_paterno = '$ap', apellido_materno = '$am', 
	    fecha_ingreso = '$fecha', sueldo_mensual = '$sm', sueldo_diario = '$sd', departamento = '$dep', frecuencia_pago = '$fp' WHERE id_empleado = $id");

        
        }else{
        
    $id = $_POST['id_editar']; 
    $nombre = $_POST['nombre_editar'];
    $ap = $_POST['ap_editar'];
    $am = $_POST['am_editar'];
    $sm = $_POST['sm_editar'];
    $sd = $_POST['sm_editar']/30.4;
    $fecha = $_POST['fecha_editar'];
    $dep = $_POST['dep_editar'];
    $fp = $_POST['fp_editar'];
    $status = 1;


    
	    $sql = mysqli_query($conexion, "UPDATE empleados SET id_empleado = '$id', nombre = '$nombre', apellido_paterno = '$ap', apellido_materno = '$am', 
	    fecha_ingreso = '$fecha', sueldo_mensual = '$sm', sueldo_diario = '$sd', departamento = '$dep', frecuencia_pago = '$fp',foto = '$destino' WHERE id_empleado = $id");

        
            

        }
	    
    	    
	    mysqli_close($conexion);

	header("location: agregar_empleado.php");
	
}
?>
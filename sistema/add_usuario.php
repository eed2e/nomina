<?php
if (empty($_POST['id'] ) || empty($_POST['nombre'] )|| empty($_POST['rpass'] )|| empty($_POST['pass'] ){
    

}else{
    require("../conexion.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];
    $rol = $_POST['rol'];
   
        if($pass = $rpass){
   
    
	    $sql = mysqli_query($conexion, "INSERT INTO usuarios (id, nombre, pass, rol) VALUES ('$id','$nombre','$pass','$rol')");

            mysqli_close($conexion);
            header("location: agregar_empleado.php");

        }else{
            mysqli_close($conexion);
            $error="las contraseñas no coinsiden";
	header("location: agregar_empleado.php?id=$error");
        }
        
            

	    
	
	    
	    
    	    
	    
}
?>

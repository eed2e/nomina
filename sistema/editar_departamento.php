<?php
if (empty($_POST['id_editar'] ) || empty($_POST['nombre_editar'] )) {
    

}else{
    require("../conexion.php");
    $id = $_POST['id_editar'];
    $nombre = $_POST['nombre_editar'];

    
	    $sql = mysqli_query($conexion, "UPDATE departamentos SET nombre= '$nombre' WHERE id_departamento = $id");

	    mysqli_close($conexion);

	header("location: departamento.php");
}
?>

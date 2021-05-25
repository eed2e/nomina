<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM departamentos WHERE id_departamento = $id");
    
    
    
    mysqli_close($conexion);
   
    
    header("location: departamento.php");
}
?>
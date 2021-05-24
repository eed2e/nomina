<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
     $codproducto = $_GET['cod'];
    

    
    $sql = mysqli_query($conexion, "SELECT * FROM producto   WHERE codproducto = $codproducto");
    $data = mysqli_fetch_assoc($sql);
    $id = $_GET['id'];
   
    $sqlpe = mysqli_query($conexion, "SELECT * FROM peticion   WHERE id_p = $id");
    $date = mysqli_fetch_assoc($sqlpe);
    $cantidad = $date['cantidad'];
    $existencia = $data['existencia'];
    $stock = ($cantidad + $existencia);

    $query_actualizar = mysqli_query($conexion,"UPDATE producto SET existencia = $stock WHERE codproducto = $codproducto");
    $query_delete = mysqli_query($conexion, "DELETE FROM peticion WHERE id_p = $id");

    mysqli_close($conexion);
       //echo '<script language="javascript">alert("Se a eliminado satisfactoriamente");window.location.href="nueva_venta.php"</script>';

    header("location: nueva_venta.php");
}
?>
<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $id = $_GET['id'];
    $new = $_POST['no'];
    $sql= mysqli_query($conexion, "SELECT * FROM producto WHERE codproducto = $id");
    $data = mysqli_fetch_assoc($sql);


	var_dump($new); 

    $cantidad= $data['existencia'];

    $suma = $cantidad + $new;
var_dump($suma); 
    $sqli= mysqli_query($conexion, "UPDATE producto SET existencia = $suma  WHERE codproducto = $id" );
    $date = mysqli_fetch_assoc($sqli);
    
    mysqli_close($conexion);
   
    
    header("location: agregar_producto.php?id=$id");
}
?>
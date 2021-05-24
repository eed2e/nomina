<?php

    require("../conexion.php");
    $id = $_POST['cliente_n'];
    $x =1;
    $sqll= mysqli_query($conexion, "INSERT INTO mexicanada(no) VALUES ($x)");

    $pedirnumero= mysqli_query($conexion, "SELECT MAX(id_gen) AS id_gen FROM mexicanada");
    $no = mysqli_fetch_assoc($pedirnumero);  
$ff = date("Y-m-d H:i:s");
$nofactura = $no['id_gen'];




    $sqli = mysqli_query($conexion, "SELECT * FROM cliente WHERE nombre = '$id'");
    $date = mysqli_fetch_assoc($sqli);
    $peticion = $date['idcliente'];

    $sql = mysqli_query($conexion, "SELECT * FROM peticion");
    $result = mysqli_num_rows($sql);  
    if ($result > 0) {
        while ($data = mysqli_fetch_assoc($sql)) {
            $cod = $data['codproducto'];
            $cantidad = $data['cantidad'];

            $query_insert = mysqli_query($conexion, "INSERT INTO detallefactura(nofactura, codproducto, cantidad,fecha_f, nombre, codcliente) VALUES ('$nofactura', '$cod', '$cantidad','$ff', '$id', $peticion)");


        }
    }
       $query_ins = mysqli_query($conexion, "INSERT INTO factura(nofactura,fecha,codcliente) VALUES ($nofactura, '$ff', $peticion)");

       $query_eliminar = mysqli_query($conexion, "DELETE FROM peticion ");
    mysqli_close($conexion);
   header("location: nueva_venta.php");

?>
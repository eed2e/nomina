<script src="botones.js" type="text/javascript"></script>
<?php
if (!empty($_GET['id'] ) || empty($_POST['peticion'] )) {

    require("../conexion.php");
    $id = $_GET['id'];
    $peticion = $_POST['peticion'];
    
    if($peticion <=0 ){
            echo '<script language="javascript">alert("Se requiere todos los campos para continuar");window.location.href="nueva_venta.php"</script>';

    }else{
    
        $confirm = 1;
	    $sql = mysqli_query($conexion, "SELECT * FROM producto   WHERE codproducto = $id");
	    $data = mysqli_fetch_assoc($sql);
	    $minimo = $data['stockm'];
	    $stock = $data['existencia'];
	    $nombre = $data['descripcion'];
	    $img = $data['imagen'];
	    $stoc = intval($stock);
	    $peticionn = intval($peticion);
	?>
        <script languaje="JavaScript">
            

      var varjs="'.$confirm.'";
            

      alert(varjs);
        </script>
        <?php
	    if($stock >= $peticion){
	    $new =0;
		    $sqli = mysqli_query($conexion, "SELECT * FROM peticion ");
		    $date = mysqli_fetch_assoc($sqli);
		    $actual = $date['cantidad'];
		    $actuall = intval($actual);
		    $new = $date['codproducto'];
		    if($new != $id){
		    
		    $query_insert = mysqli_query($conexion,"INSERT INTO peticion( codproducto, descripcion, cantidad, imagen) VALUES ('$id','$nombre','$peticion','$img')");
			    $stock = $stock-$peticion ;
			    
			    $query_actualizar = mysqli_query($conexion,"UPDATE producto SET existencia = $stock WHERE codproducto = $id");
			    $json = json_encode($stock);
		    
		    }else{
		    
		    	$real = $actual+$peticion;
		    	$query_neww = mysqli_query($conexion,"UPDATE peticion SET cantidad = $real WHERE codproducto = $id");
		    	$stock = $stock-$peticion;
			    
			    $query_actualizar = mysqli_query($conexion,"UPDATE producto SET existencia = $stock WHERE codproducto = $id");
		    	$json = json_encode($stock);
		    	}
		    	
		    	
		    	if ($stock <= $minimo){
		    	    echo '<script language="javascript">alert("Tienes un Stock bajo favor de realizar un pedido de este producto");window.location.href="nueva_venta.php"</script>';
		    	}else
		    	header("location: nueva_venta.php");
			    
	}else{
	    echo '<script language="javascript">alert("Tienes menos stock del que estas solicitando");window.location.href="nueva_venta.php"</script>';
	    
	}
        
	    
	    }
    	    
	    mysqli_close($conexion);

	   //header("location: nueva_venta.php");
	}
?>

    
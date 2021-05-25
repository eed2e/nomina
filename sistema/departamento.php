<?php include_once "include/header.php";
include "../conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['departamento']) ) {
        $alert = '<div class="alert alert-danger" role="alert">
                                    Todo los campos son obligatorio
                                </div>';
    } else {
        $departamento = $_POST['departamento'];
        $query_insert = mysqli_query($conexion, "INSERT INTO departamentos(nombre) values ('$departamento')");
    }
    mysqli_close($conexion);
}
?>

<!-- Begin Page Content -->

 <!-- Page-header start -->
 <div class="page-header">
                        <div class="page-block">
                        <h1 class= "text-center">DEPARTAMENTOS</h1>
                            <div class="row align-items-center form-group row">
                                
                                <div class="col-sm-6">
                                <form action="" method="post" autocomplete="off">
                                    <label for="nombre">Nombre del  Departamento</label><br>
                                    <input type="text" placeholder="Ingrese Nombre" name="departamento" id="departamento" class="form-control " style = "border-radius: 15px;">
                                    
                                </div>
                                <div class="col-sm-1">
                                <label for="nombre">.</label><br>
                                    <input type="submit" value="Guardar " class="btn waves-effect waves-light btn-grd-success btn-round form-control ">
                                </div>
                            
                               </form>
                                <div class="col-md-8">
                                    
                                    <div class="page-header-title">
                                        
                                    
                                        <div class="col-md-8">
                                            <br>
                                        <div class="col-md-20">
                                        
                                        <br>
                                        
                                                    
                                                 
                                        
                                                        <div class="form-group row">
                                                  
                                                       
                                                        
                                                </div>
                                                <div class="col-md-4">
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-block table-border-style">
                    <table class="table  table-striped table-bordered " id="table" >
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Acciones</th>
	                       
							
							</tr>
						</thead>
						<tbody>
							<?php
							include "../conexion.php";

							$query = mysqli_query($conexion, "SELECT * FROM departamentos");
							$result = mysqli_num_rows($query);
							if ($result > 0) {
								while ($data = mysqli_fetch_assoc($query)) { ?>
									<tr>
										<td><?php echo $data['id_departamento']; ?></td>
										<td><?php echo $data['nombre']; ?></td>
                            <td><a href="baja_empleado.php?id=<?php echo $data['id_departamento']; ?>" class="btn btn-danger" style="border-radius:20px">Baja </a>
                            <!-- Button to trigger modal -->
                                <div data-toggle="modal" data-target="#modalForm" class="btn waves-effect waves-light btn-grd-info btn-round" onclick='editar_empleado(
                                                    <?php echo $data["id_departamento"];?> , 
                                                    
                                                    "<?php echo $data["nombre"];?>")'>Editar</div>
                                        </td>
									</tr>
							<?php }
							} ?>
						</tbody>

					</table>
                    <!-- Page-header end -->
                   
                </div>
  <div class="modal fade" id="modalForm" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">X</span>
                        <span class="sr-only">Cerrar</span>
                    </button>
                    <br>
                    <h4 class="modal-title text-center" id="myModalLabel">Editar departamento</h4>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    <form action="editar_departamento.php" method="post" class="md-float-material form-material">   
                        <div class="auth-box card">
                            <div class="card-block" class="row">
                                
                                <div class="form-group form-primary">
                                                            <input type="text" name="id_editar" id="id_editar" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">ID</label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="nombre_editar" id="nombre_editar" class="form-control" required>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Nombre(s)</label>
                                                        </div>

                                <div class="row">

                                    <div class="col-md-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>

                                  <!-- Modal 2 -->
                <!-- Modal Footer -->
               <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary submitBtn">Guardar</button>
               </div>
            </div>
        </div>
            </form>

        <!-- Page-body end -->
    </div>
  
                <div id="styleSelector">
                
                </div>

        

    

<div class="content">

    <!-- Page Heading -->


    <!-- Content Row -->
    


</div>
<script type="text/javascript">
function editar_empleado(id,nombre)

            {   
                document.getElementById('id_editar').value = id;
               
                document.getElementById('nombre_editar').value = nombre;
                

            }
</script>
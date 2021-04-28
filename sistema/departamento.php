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
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">DEPARTAMENTOS</h5>
                                       
                                        <div class="col-md-8">
                                        <div class="col-md-8">
                                        <br>
                                       
                                                    <form action="" method="post" autocomplete="off">
                                                        <?php echo isset($alert) ? $alert : ''; ?>
                                        
                                                        <div class="">
                                                        <label for="nombre">Nombre del  Departamento</label>
                                                        <input type="text" placeholder="Ingrese Nombre" name="departamento" id="departamento" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                <br>
                    
                                                <input type="submit" value="Guardar " class="btn btn-primary">
                                                    </form>
                                        <br>
                                        <br>
                                        <br>

                                          
                                </div>
                                </div>
                                </div>
                                </div>
                                <br>
                                <br>


    <table class="table table-striped table-bordered" id="table">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Nombre</th>
	
							
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
										
										
									</tr>
							<?php }
							} ?>
						</tbody>

					</table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                   
                </div>
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">DEPARTAMENTOS</h1>

    </div>

    <!-- Content Row -->
    


</div>

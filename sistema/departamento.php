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
                            
                               
                                <div class="col-md-8">
                                    
                                    <div class="page-header-title">
                                        
                                    <form action="" method="post" autocomplete="off">
                                        <div class="col-md-8">
                                            <br>
                                        <div class="col-md-20">
                                        
                                        <br>
                                        </form>
                                                    
                                                 
                                        
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


    <!-- Content Row -->
    


</div>

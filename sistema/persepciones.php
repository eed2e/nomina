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
                        <div class="content"> 
        <div class="page-header">
            <div class="page-block">
                <h1 class= "text-center">PERCEPCIONES</h1>
    <!-- Button to trigger modal -->
                <button class="btn waves-effect waves-light btn-grd-info btn-round" data-toggle="modal" data-target="#modalForm">
                Nuevo
                </button>  
            </div>
        </div>
        <div class="card-block table-border-style">
                    <table class="table  table-striped table-bordered " id="table" >
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
                                <th>Descripcion</th>
                                <th>Monto</th>
                                <th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php
                    $query = mysqli_query($conexion, "SELECT * FROM percepciones");
				    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                    while ($row = mysqli_fetch_assoc($query)){
                      echo "
                        <tr>
                          <td>".$row['id_per']."</td>
                          <td>".$row['descripcion']."</td>
                          <td>".number_format($row['monto'], 2)."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id_per']."'><i class='fa fa-edit'></i> Editar</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id_per']."'><i class='fa fa-trash'></i> Eliminar</button>
                          </td>
                        </tr>
                      ";
                    }
                    }?>
						</tbody>

					</table>
                    <!-- Page-header end -->
    </div>
        
<!-- Modal -->
    
                                        <div class="modal fade" id="modalForm" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true">X</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                        <br>
                                                        <h4 class="modal-title text-center" id="myModalLabel">Nuevo Percepcion</h4>
                                                            
                                                        </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                        <form action="add_empleado.php" method="POST" class="md-float-material form-material">
                                                                <div class="auth-box card">
                                                                    <div class="card-block">
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Nombre</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="ap" id="ap" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Descripcion</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="am" id="am" class="form-control" required>
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Monto</label>
                                                                        </div>                                                       
                                                                        
                                                                        <div class="row">

                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>
                                                                   
                                                            
                                                    </div>
                                                    
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary submitBtn" >Guardar</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>

                                    <!-- Page-body end -->
                                </div>
                                
                            </div>
                        </div>
                    
                
            </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Modal -->
 <!-- Carga de Imagen -->




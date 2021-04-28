<?php
include_once "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="unclude/picnic.css">
    
    </head>



    <div class="content"> 
        <div class="page-header">
            <div class="page-block">
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
								<th>foto</th>
								<th>Nombre</th>
								<th>fecha ingreso</th>
								<th>Salario Mensual</th>
								<th>Salario diario</th>
								<th>Departamento</th>
								<th>estatus</th>
								<th>acciones</th>
	
							
							</tr>
						</thead>
						<tbody>
							<?php
							include "../conexion.php";

							$query = mysqli_query($conexion, "SELECT * FROM empleados");
							$result = mysqli_num_rows($query);
							if ($result > 0) {
								while ($data = mysqli_fetch_assoc($query)) { ?>
									<tr>
										<td><?php echo $data['id_empleado']; ?></td>
										<td><?php echo $data['foto']; ?></td>
										<td><?php echo $data['nombre']; ?>  <?php echo $data['apellido_paterno']; ?>  <?php echo $data['apellido_materno']; ?></td>
										<td><?php echo $data['fecha_ingreso']; ?></td>
										<td><?php echo $data['salario_mensual']; ?></td>
										<td><?php echo $data['salario_diario']; ?></td>
										<td><?php echo $data['departamento']; ?></td>
										<td><?php   if($data['status']==1){
                                            echo "activo";
                                        }else{
                                            echo "inactivo";
                                        } ?></td>
										
										
									</tr>
							<?php }
							} ?>
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
                                                        </div>
                                                    <div>
                                                    <center>
                                                        <h4 class="modal-title" id="myModalLabel">Nuevo Empleado</h4>
                                                            </center>
                                                    </div>
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <p class="statusMsg"></p>
                                                        <form action="login.php" method="post" class="md-float-material form-material">
                                                                <div class="text-center">
                                                                </div>
                                                                <div class="auth-box card">
                                                                    <div class="card-block">
                                                                        <center>
                                                                            <div style="width: 200px" > <!-- this div just for demo display -->
                                                                                <label class="dropimage miniprofile" style=" border-radius: 50%; padding-bottom: 75%; heigth:2px; width:145px;">
                                                                                <input name="image" title="Drop image or click me" type="file" id="imagen">
                                                                                </label>
                                                                            </div>
                                                                        </center>

                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">nombre(s)</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">apellido Paterno</label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="text" name="usuario" id="usuario" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">apellido Materno</label>
                                                                        </div>                                
                                                                        <div class="form-group form-primary">
                                                                            <label for="fecha" >Fecha:
                                                                                <div id="datepicker"></div>
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group form-primary">
                                                                            <input type="password" name="clave" id="clave" class="form-control" required="">
                                                                            <span class="form-bar"></span>
                                                                            <label class="float-label">Contraseña</label>
                                                                        </div>
                                                                        <div class="row m-t-25 text-left">
                                                                            <div class="col-12">

                                                                            </div>
                                                                        </div>
                                                                        <div class="row m-t-30">
                                                                            <div class="col-md-12">

                                                                                <button type="submit" class="btn btn-primary btn-md btn-block text-center m-b-20">iniciar</button>
                                                                            </div>
                                                                        </div>
                                                                        <hr/>
                                                                        <div class="row">

                                                                            <div class="col-md-2">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                    </div>
                                                    
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    <!-- Carga de Imagen -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
  [].forEach.call(document.querySelectorAll('.dropimage'), function(img){
    img.onchange = function(e){
      var inputfile = this, reader = new FileReader();
      reader.onloadend = function(){
        inputfile.style['background-image'] = 'url('+reader.result+')';
      }
      reader.readAsDataURL(e.target.files[0]);
    }
  });
});
    </script> 
    <!-- Traducir calendario -->
    <script>
 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#fecha").datepicker();
});
</script>

    </html>

